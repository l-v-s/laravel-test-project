@extends('intera_index')

@section('submenu')
    @include('pages.provider-razdel.submenu')
@endsection

@section('content')

<?
use Menu as LavMenu;

Menu::make('ProviderRazdelsMenu', function ($menu) {

    $razdels = DB::table('providers_razdels')->where('status','1')->orderBy('position','desc')->orderBy('id','asc')->get();

    foreach($razdels as $razdel){
        $li = $razdel->name;
        if ($razdel->color)
            $li = "<span style='background-color:".$razdel->color.";' >".$razdel->name."</span>";

        if (!$razdel->parent_id){
            $menu->add($li,['url' => 'provider-razdel/'.$razdel->id.'/edit', 'id' => $razdel->id]);
        }
        elseif ($razdel){
            $menu->add($li, ['url' => 'provider-razdel/'.$razdel->id.'/edit', 'parent' => $razdel->parent_id]);
        }
    }
});

?>



{!! !empty(Menu::get('ProviderRazdelsMenu'))?Menu::get('ProviderRazdelsMenu')->asol():'нет разделов' !!}

<h6><a class="alert-link" href="/provider-razdel/create"><u>Добавить раздел</u></a></h6>
@stop
