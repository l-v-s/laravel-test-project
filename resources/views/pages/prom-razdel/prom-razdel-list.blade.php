@extends('promrazdelindex')


@section('content')

<?
use Menu as LavMenu;

Menu::make('RazdelsMenu', function ($menu) {

    $razdels = DB::table('razdels')->get();

    foreach($razdels as $razdel){
        if (!$razdel->parent_razdel_id){
            $menu->add($razdel->name,['url' => 'prom-razdel/'.$razdel->id.'/edit', 'id' => $razdel->id]);
        }
        elseif ($razdel){
            $menu->add($razdel->name, ['url' => 'prom-razdel/'.$razdel->id.'/edit', 'parent' => $razdel->parent_razdel_id]);
        }
    }
});

?>

{!! Menu::get('RazdelsMenu')->asol() !!}

@stop
