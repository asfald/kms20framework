<?php
namespace App\Controller;

class HomeController {
    public function index(){
        var_dump($_GET);
        var_dump($_POST);
        $name = $_GET['name'] ?? 'Nimetu';
        view('index', compact('name'));   
     }
    
    public function about(){

        view('about');
    }

    public function upload(){
        var_dump($_FILES);
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/../../public/' . $_FILES['image']['name']);
    }
}

//echo $hello ?? 'goodbye';
// on sama mis
//  if(isset($hello)){
//    echo $hello}
//else { echo 'GOodbye';}
//
//if pmst:
// $answer = 3 < 10 ? true : false; 
//
//