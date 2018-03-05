@extends('intera_index')

@section('submenu')
    @include('pages.providers.submenu')
@endsection

@section('content')

<?
use Menu as LavMenu;

Menu::make('ProviderRazdelsMenu', function ($menu) {

    $razdels = DB::table('providers_razdels')->get();

    foreach($razdels as $razdel){
        if (!$razdel->parent_id){
            $menu->add($razdel->name,['url' => 'providers/razdels/'.$razdel->id.'/edit', 'id' => $razdel->id]);
        }
        elseif ($razdel){
            $menu->add($razdel->name, ['url' => 'providers/razdelsprom-razdel/'.$razdel->id.'/edit', 'parent' => $razdel->parent_id]);
        }
    }
});

?>



{!! !empty(Menu::get('ProviderRazdelsMenu'))?Menu::get('ProviderRazdelsMenu')->asol():'нет разделов' !!}

<h6><a class="alert-link" href="/providers/razdels/create"><u>Добавить раздел</u></a></h6>
@stop
