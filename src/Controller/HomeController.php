<?php
namespace App\Controller;

class HomeController {
    public function index(){
        $name = "Rain";
        view('index', compact('name'));   
     }
    
    public function about(){

        view('about');
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