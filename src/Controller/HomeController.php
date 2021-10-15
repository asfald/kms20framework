<?php
namespace App\Controller;


use App\DB;
use App\Models\Article;
use PDO;
use PDOException;

class HomeController {
    public function index(){
        try {

            $results = Article::all();
            var_dump($results);
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