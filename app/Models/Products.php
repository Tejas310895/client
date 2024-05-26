<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\ProductItemnaryGroup;

class Products extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;

    public static $status = [
        self::STATUS_ACTIVE => 'Active',
        self::STATUS_INACTIVE => 'Inactive',
    ];
    protected $table      = 'products';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'type', 'default_price', 'itemnary', 'img', 'status', 'created_by', 'updated_by'];

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

    public function getProductsWithItemnary()
    {
        $products = $this->where('status', self::STATUS_ACTIVE)->asArray()->findAll();
        $itemnary_products = array_reduce($products, function ($carry, $val) {
            $val['group'] = model('ProductItemnaryGroup')->ItemnaryGroup(json_decode($val['itemnary'], true));
            $carry[] = $val;
            return $carry;
        });
        return $itemnary_products;
    }
}
