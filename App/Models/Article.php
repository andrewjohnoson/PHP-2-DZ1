<?php

namespace App\Models;

use App\Model;
use App\Db;

class Article extends Model
{
    public const TABLE = 'news';
    public const FIRST_COLUMN = 'title';
    public const SECOND_COLUMN = 'content';

    public $id;
    public $title;
    public $content;

    public static function lastThreeNews()
    {
        $db = new Db();
        $query = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT 3';
        return $db->query($query, static::class);
    }
}