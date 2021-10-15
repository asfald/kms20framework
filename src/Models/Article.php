<?php

namespace App\Models;

class Article extends Model
{
    protected static $tableName = 'articles';

    public $id;
    public $title;
    public $body;

    public function capitalizedTitle(){
        return strtoupper($this->title);
    }
}