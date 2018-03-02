<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ isset($data)? !empty($data['title'])?$data['title']:'title нет' : 'не передается data' }} </title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>

@include('layouts.top_menu')

{{--<div class="bs-component" >
    <ul class="nav nav-pills">
        <li class="nav-item">
            <{{ ($action == 'PromRazdelList')?'span':'a' }} class="nav-link" href="/prom-razdel/">Список разделов</a>
        </li>
        <li class="nav-item">
            <{{ ($action == 'PromRazdelCreate')?'span':'a' }} class="nav-link" href="/prom-razdel/create">Добавить раздел</a>
        </li>
    </ul>
</div>
--}}
<div class="container">

    <h2 class="text-center">
        {{ isset($data)? !empty($data['pagetitle'])?$data['pagetitle']:'pagetitle нет' : 'не передается data' }}

    </h2><hr/>

    <?
    /*    @for ($i = 0; $i < 5; $i++)
    <p>№ {{$i}}</p>
    @endfor

    @if( ! empty($users))
    @foreach($users as $user)
    <p>{{ $user['name'] }}</p>
    @endforeach
    @endif
     */
    //$test = 'тестовая переменная';
    ?>

    @yield('content')


</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>