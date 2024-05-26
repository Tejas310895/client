<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\ProductItemnaryGroup;
use App\Models\ProductItemnary;

class Orders extends Model
{
    const STATUS_ORDER_PLACED = 1;
    const STATUS_ORDER_PROCESSING = 2;
    const STATUS_ORDER_OUT_FOR_DELIVERY = 3;
    const STATUS_ORDER_DELIVERED = 4;
    const STATUS_PAYMENT_PENDING = 5;
    const STATUS_CANCELLED = 6;

    public static $status = [
        self::STATUS_ORDER_PLACED => 'Placed',
        self::STATUS_ORDER_PROCESSING => 'Processing',
        self::STATUS_ORDER_OUT_FOR_DELIVERY => 'Out for delivery',
        self::STATUS_ORDER_DELIVERED => 'Delivered',
        self::STATUS_PAYMENT_PENDING => 'Payment Pending',
        self::STATUS_CANCELLED => 'Cancelled',
    ];
    protected $table      = 'orders';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['order_no', 'type', 'status', 'itemnary', 'order_date', 'del_status', 'logs', 'created_by', 'updated_by', 'user_id', 'college_id', 'charges', 'partner_id'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;

    public function getCustomerOrders($user_id = null)
    {
        if ($user_id != null) {
            return $this->where(['user_id' => $user_id, 'status' => Orders::STATUS_ORDER_DELIVERED])->findAll();
        } else {
            $orders_list = $this->findAll();
            $orders_list = array_reduce($orders_list, function ($carry, $val) {
                $carry[$val['user_id']][$val['status']][] = $val;
                return $carry;
            });
            return $orders_list;
        }
    }
    public function getOrdersWithProducts()
    {
        $orders = $this->whereIn('status', [self::STATUS_ORDER_PLACED, self::STATUS_ORDER_PROCESSING])->findAll();
        $itemnaryGroup = model('ProductItemnaryGroup')->asArray()->findAll();
        $itemnaryGroup = array_reduce($itemnaryGroup, function ($carry, $val) {
            $carry[$val['id']] = $val;
            return $carry;
        });
        $itemnary = model('ProductItemnary')->asArray()->findAll();
        $itemnary = array_reduce($itemnary, function ($carry, $val) {
            $carry[$val['id']] = $val;
            return $carry;
        });
        $products = model('Products')->asArray()->findAll();
        $products = array_reduce($products, function ($carry, $val) {
            $carry[$val['id']] = $val;
            return $carry;
        });
        $new_orders = [];
        foreach ($orders as $order) {
            $itemnarys = json_decode($order['itemnary'], true);
            $order_products = [];
            foreach ($itemnarys as $items) {
                $mixed_itemnaries =  array_merge($items['itemnary_multi'], $items['itemnary_single']);
                $groups = [];
                foreach ($mixed_itemnaries as $item) {
                    $item = json_decode($item, true);
                    if (!isset($groups[$item['g_id']])) {
                        $groups[$item['g_id']] = $itemnaryGroup[$item['g_id']];
                    }
                    $current_item = $itemnary[$item['i_id']];
                    $current_item['price'] = $item['price'];
                    $groups[$item['g_id']]['items'][$item['i_id']] = $current_item;
                }
                $products[$items['product_id']]['groups'] = $groups;
                $products[$items['product_id']]['pages'] = $items['pages'];
                $products[$items['product_id']]['copies'] = $items['copies'];
                $products[$items['product_id']]['files'] = $items['files'];
                $order_products[] = $products[$items['product_id']];
            }
            $order['products'] = $order_products;
            array_push($new_orders, $order);
        }
        return $new_orders;
    }
}
