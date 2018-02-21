<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//привязывается к posts автоматически
class Post extends Model
{
    //potected $table = "название таблицы" - привязывает модель к таблице

    //поля, которые можно обавлять в таблицу
    protected $fillable = ['title','alias','intro','body'];

    //поля, которые нельзя добавлять в таблицу
    //protected $guarded = ['title','alias','intro','body'];

    public function getRouteKeyName()
    {
        return 'alias'; //автоматический поиск будет не по id, а по alias
    }
}
