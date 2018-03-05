<?
$action = Route::currentRouteName();

if(!isset($top_page))
    $top_page='';

$submenu_items = [
    [
        'action' => 'Providers',
        'top_page' => 'providers',
        'title' => 'Список поставщиков',
        'link' => '/providers'
    ],
    [
        'action' => 'ProvidersRazdels',
        'top_page' => 'providers',
        'title' => 'Разделы',
        'link' => '/providers/razdels'
    ],
    /*[
        'action' => '',
        'title' => '',
        'link' => ''
    ],*/
]
?>

<ul class="nav nav-tabs">
    @foreach($submenu_items as $item)
        {!! ($action == $item['action'])?'<li class="nav-item">
        <span class="nav-link active" data-toggle="tab" href="'.$item['link'].'">'.$item['title'].'</span>
    </li>
    ':'
        <li class="nav-item">
        <a class="nav-link"  href="'.$item['link'].'" >'.$item['title'].'</a>
        </li>'
        !!}
    @endforeach
</ul>
