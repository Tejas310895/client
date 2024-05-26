<?php

namespace App\Controllers;

use App\Models\Orders;

class MainController extends BaseController
{
    public function index(): string
    {
        $data['orders'] = $this->orders->getOrdersWithProducts();
        return $this->render_page('home',$data);
    }
}
