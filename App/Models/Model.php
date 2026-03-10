<?php

namespace App\Models;

use App\Core\Database;
use App\Core\QueryBuilder;

class Model
{
    protected static $table;

    public static function all()
    {
        $db = Database::connect();

        $stmt = $db->query("SELECT * FROM " . static::$table);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function find($id)
    {
        $db = Database::connect();

        $stmt = $db->prepare("SELECT * FROM " . static::$table . " WHERE id = ?");

        $stmt->execute([$id]);

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    public static function create($data)
    {
            return QueryBuilder::table(static::$table)->insert($data);

    }
}
