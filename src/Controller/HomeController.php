<?php
namespace App\Controller;

class HomeController {
    public function index(){
        $name = "Rain";
        require __DIR__ . '/../../views/index.php';
    }
    
    public function about(){
        echo "About Us";
    }

}