<?
$action = Route::currentRouteName();

    if(!isset($top_page))
        $top_page='';


//echo "Action = ".$action.", top_page=".$top_page;
$top_menu_items = [
    [
        'action' => 'home',
        'top_page' => '/',
        'title' => 'Список постов',
        'link' => '/'
    ],
    [
        'action' => 'PromRazdelList',
        'top_page' => 'prom-razdel',
        'title' => 'Список разделов',
        'link' => '/prom-razdel'
    ],

    [
        'action' => 'Providers',
        'top_page' => 'providers',
        'title' => 'Поставщики',
        'link' => '/providers'
    ],
    /*[
        'action' => '',
        'title' => '',
        'link' => ''
    ],*/
];
/*
$second_menu_items = [
    [
        'action' => 'home',
        'top_page' => '/',
        'title' => 'Список постов',
        'link' => '/'
    ],
    [
        'action' => 'PromRazdelList',
        'top_page' => 'prom-razdel',
        'title' => 'Список разделов',
        'link' => '/prom-razdel'
    ],

    [
        'action' => 'PostCreate',
        'top_page' => '/',
        'title' => 'Добавить пост',
        'link' => '/posts/create'
    ],
    [
        'action' => 'PromRazdelCreate',
        'top_page' => 'prom-razdel',
        'title' => 'Добавить раздел',
        'link' => '/prom-razdel/create'
    ],
    [
        'action' => 'Providers',
        'top_page' => 'providers',
        'title' => 'Поставщики',
        'link' => '/providers'
    ],
    /*[
        'action' => '',
        'title' => '',
        'link' => ''
    ],*/
//]
?>


<div class="bs-docs-section clearfix">
        <div class="row">
            <div class="col-lg-12">
                <div class="bs-component">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarColor02">
                            <ul class="navbar-nav mr-auto">
                                @foreach($top_menu_items as $item)
                                    {!! ($top_page == $item['top_page'])?'<li class="nav-item active" >
                                    <span class="nav-link">'.$item['title'].'</span>
                                    </li>
                                ':'
                                <li class="nav-item" >
                                    <a class="nav-link" href="'.$item['link'].'">'.$item['title'].'</a>
                                    </li>'
                                    !!}
                                 @endforeach
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>



