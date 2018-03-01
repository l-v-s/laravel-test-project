<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Menu as LavMenu; //lavary/laravel-menu

class Menu extends Model
{

/*
 * Формирование пунктов меню используя расширение
 * https://github.com/lavary/laravel-menu#installation
 */
public function buildMenu ($arrMenu){
    $mBuilder = LavMenu::make('MyNav', function($m) use ($arrMenu){
        foreach($arrMenu as $item){
            /*
             * Для родительского пункта меню формируем элемент меню в корне
             * и с помощью метода id присваиваем каждому пункту идентификатор
             */
            if($item->parent_id == 0){
                $m->add($item->title, $item->path)->id($item->id);
            }
            //иначе формируем дочерний пункт меню
            else {
                //ищем для текущего дочернего пункта меню в объекте меню ($m)
                //id родительского пункта (из БД)
                if($m->find($item->parent_id)){
                    $m->find($item->parent_id)->add($item->title, $item->path)->id($item->id);
                }
            }
        }
    });
    return $mBuilder;
}
}
