<?php

namespace App\Http\Controllers\Site;
use App\Models\StsProducts;
use App\Models\ConfigView;


use Illuminate\Http\Request;

class SiteController{

    protected $model;

    public function __construct(StsProducts $prod)
    {
        $this->model = $prod;        
    }

    public function home()
        {
            return view('site/home');
        }
    
}