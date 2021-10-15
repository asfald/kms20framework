<?php
namespace App\Controller;


use App\DB;
use App\Models\Article;
use GuzzleHttp\Client;
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

        $client = new Client();
        $response = $client->get('http://api.icndb.com/jokes/random');
            $json = $response->getBody()->getContents();
            $joke = json_decode($json);
            var_dump($joke->value->joke);
        }
    }
    
    public function about(){
        view('about');
    }
    
    public function upload(){
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/../../public/'. $_FILES['image']['name']);
        header('Location: /');
    }
}