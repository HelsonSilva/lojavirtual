<?php

namespace App\Http\Controllers;
use App\Models\StsProducts;
use App\Models\ConfigView;


use Illuminate\Http\Request;

class Home extends Controller
{
    
    /*private $Search;
    private $Data;

    public function __construct()
    {   
        if(filter_input(INPUT_GET, 'search', FILTER_DEFAULT)){
            $search = filter_input(INPUT_GET, 'search', FILTER_DEFAULT);
            $this->Search = htmlspecialchars(strip_tags(trim(mb_strtolower($search))));
            $this->searchProds();
        }
        
        $products = new StsProducts();
        $this->Data["prods"] = $products->getResult();
        $this->renderView();  
        
    }

    private function renderView(){
        $view = new ConfigView("resource/views/site/home", $this->Data);
        $view->render();
    }
    
    private function searchProds()
    {
        $search = new StsProducts();
        $search->likeProd($this->Search);
        //$ths $search->getResult();
    }*/

}
