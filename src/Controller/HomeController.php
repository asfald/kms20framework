<?php
namespace App\Controller;

class HomeController {
    public function index(){
        var_dump($_GET);
        var_dump($_POST);
        var_dump($_REQUEST);
        $name = $_GET['name'] ?? 'Nimetu';
        view('index', compact('name'));
    }
    
    public function about(){
        view('about');
    }
    
    public function upload(){
        var_dump($_FILES);
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/../../public/'. $_FILES['image']['name']);
    }
}