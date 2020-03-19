<?php


namespace Step\Models;


use ActiveRecord\Model;

/**
 * Class User
 * @package Step\Models
 *
 * @property-read $id
 * @property $username
 * @property $password
 * @property $token
*/
class User extends Model
{
    public static $table_name = 'users';
}