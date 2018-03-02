<?
$action = Route::currentRouteName();
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
                                <li class="nav-item {{ ($action == 'home')?' active ':'' }}">
                                    <{{ ($action == 'home')?'span ':'a' }} class="nav-link" href="/">Список постов</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/posts/create">Добавить пост</a>
                                </li>
                                <li class="nav-item {{ ($action == 'PromRazdelList')?' active ':'' }}" >
                                    <{{ ($action == 'PromRazdelList')?'span ':'a ' }} class="nav-link" href="/prom-razdel">Список разделов</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/prom-razdel/create">Добавить раздел</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


