<?php
namespace App\Controller;

class HomeController {
    public function index(){
        $name = "Kaspar";
        view('index', compact('name'));
    }
    
    public function about(){
        echo $hello ?? 'good bye';

        if(isset($hello)){
            echo $hello;
        } else {
            echo 'goodbye';
        }

        $answer = 3 < 10 ? true : false;

        view('about');
    }
}