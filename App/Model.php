<?php

namespace App;

use App\Db;

abstract class Model
{

    public const TABLE = '';
    public const FIRST_COLUMN = '';
    public const SECOND_COLUMN = '';


    public static function findAll()
    {
        $db = new Db();
        $query = 'SELECT * FROM ' . static::TABLE;
        return $db->query($query,
            static::class);
    }

    public static function insert($firstContent, $secondContent)
    {
        $db = new Db();

        $query = 'INSERT INTO ' . static::TABLE . ' (id, ' . static::FIRST_COLUMN . ', '
            . static::SECOND_COLUMN . ')
        VALUES (NULL, "' . $firstContent . '", "' . $secondContent . '");';

        $db->execute($query);
    }

    public static function update($id, $firstContent, $secondContent)
    {
        $db = new Db();

        $query = 'UPDATE ' . static::TABLE .
            ' SET ' . static::FIRST_COLUMN . '="' . $firstContent . '", ' .
            static::SECOND_COLUMN . '="' . $secondContent . '" WHERE id=' . $id;

        $db->execute($query);
    }

    public static function findById($id)
    {
        $db = new Db();
        $idCheck = 'SELECT EXISTS(SELECT id FROM ' . static::TABLE . ' WHERE id='. $id .');';
        if (false === $db->checkID($idCheck)) {
            return false;
        } else {
            $query = 'SELECT * FROM ' . static::TABLE . ' WHERE id=' . $id;
            return $db->query($query, static::class);

        }
    }
}