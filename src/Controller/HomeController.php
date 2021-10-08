<?php
namespace App\Controller;

use App\Models\Article;
use PDO;
use PDOException;

class HomeController {
    public function index(){
        try {
            $conn = new PDO("sqlite:" . __DIR__ . '/../../database.sqlite');
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT id, title, body FROM articles");
            $stmt->execute();
             // * = select all, real 13 id title body asemel

         $stmt->setFetchMode(PDO::FETCH_CLASS, Article::class);
        $results = $stmt->fetchAll();
         var_dump( $results[0]->capitalizedTitle() );
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
     }
    
    public function about(){

        view('about');
    }

    public function upload(){
        var_dump($_FILES);
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/../../public/' . $_FILES['image']['name']);
        header('Location: /');
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