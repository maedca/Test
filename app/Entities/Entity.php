<?php
/**
 * Created by PhpStorm.
 * User: maedc
 * Date: 25/1/2016
 * Time: 4:04 PM
 */

namespace Test\Entities;

use Illuminate\Database\Eloquent\Model;
class Entity extends Model
{
    public static function getClass(){
        return get_class(new static);
    }
}