<?php

namespace App\Models;

class Article
{
public $id;
public $title;
public $body;

    public function capitalizedTitle()
    {
        return strtoupper($this->title);
        
}
}