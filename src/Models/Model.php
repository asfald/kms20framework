<?php

namespace App\Models;

use App\DB;

class Model
{
    protected static $tableName;

    public static function all(){
        $db = new DB(__DIR__ . '/../../database.sqlite');
        return $db->select(['*'], self::$tableName, self::class);
    }
}