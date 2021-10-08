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
            $stmt = $conn->prepare("SELECT * FROM articles");
            $stmt->execute();

            // set the resulting array to associative
            $stmt->setFetchMode(PDO::FETCH_CLASS, Article::class);
            $results = $stmt->fetchAll();
            var_dump( $results[0]->capitalizedTitle() );
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        //catch (\Exception $e) {
//            echo "Some other issue";
//        }
//        throw new \Exception();
    }
    
    public function about(){
        view('about');
    }
    
    public function upload(){
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/../../public/'. $_FILES['image']['name']);
        header('Location: /');
    }
}