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
        'action' => 'ProviderRazdelList',
        'top_page' => 'provider-razdel',
        'title' => 'Список разделов поставщиков',
        'link' => '/provider-razdel'
    ],

    /*[
        'action' => 'PostCreate',
        'top_page' => '/',
        'title' => 'Добавить пост',
        'link' => '/posts/create'
    ],*/
    [
        'action' => 'ProviderRazdelCreate',
        'top_page' => 'provider-razdel',
        'title' => 'Добавить раздел поставщиков',
        'link' => '/provider-razdel/create'
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
