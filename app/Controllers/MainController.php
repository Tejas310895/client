<?php

namespace App\Controllers;

class MainController extends BaseController
{
    public function index(): string
    {
        // return view('home');
        return $this->render_page('home');
    }
}
