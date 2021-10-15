<?php

namespace App\Models;

use App\DB;

class Model
{
    protected static $tableName;

    public static function all(){
        $db = new DB(__DIR__ . '/../../database.sqlite');
        var_dump(static::class,static::$tableName);
        return $db->select(['*'], static::$tableName, static::class);
    }
}