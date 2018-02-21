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
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/posts/create">Add post</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
    </div>
</div>
<div class="container">

    <h2 class="text-center">
        {{ isset($data)? !empty($data['pagetitle'])?$data['pagetitle']:'pagetitle нет' : 'не передается data' }}

    </h2><hr/>


    <?/*    @for ($i = 0; $i < 5; $i++)
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