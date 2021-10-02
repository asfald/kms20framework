<?php
namespace App\Controller;

class HomeController {
    public function index(){
        $name = "Rain";
        view('index', compact('name'));   
     }
    
    public function about(){

        echo "About Us";
    }

}