<?
$action = Route::currentRouteName();

    if(!isset($top_page))
        $top_page='';

$submenu_items = [
    /*[
        'action' => 'home',
        'top_page' => '/',
        'title' => 'Список постов',
        'link' => '/'
    ],*/
    [
        'action' => 'PromRazdelList',
        'top_page' => 'prom-razdel',
        'title' => 'Список разделов',
        'link' => '/prom-razdel'
    ],

    /*[
        'action' => 'PostCreate',
        'top_page' => '/',
        'title' => 'Добавить пост',
        'link' => '/posts/create'
    ],*/
    [
        'action' => 'PromRazdelCreate',
        'top_page' => 'prom-razdel',
        'title' => 'Добавить раздел',
        'link' => '/prom-razdel/create'
    ],
    /*[
        'action' => 'Providers',
        'top_page' => 'providers',
        'title' => 'Поставщики',
        'link' => '/providers'
    ],*/
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
