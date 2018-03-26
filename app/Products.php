<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //поля, которые нельзя добавлять в таблицу
    protected $guarded = [];
}
