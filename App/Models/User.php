<?php

namespace App\Models;

use App\Model;

class User extends Model
{
    public const TABLE = 'users';
    public const FIRST_COLUMN = 'email';
    public const SECOND_COLUMN = 'name';

    public $id;
    public $email;
    public $name;

}