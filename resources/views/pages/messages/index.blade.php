<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

$posts = DB::table('posts')->get();
?>

@extends('index')


@section('content')



<div class="row">
    @foreach($posts as $post)
        <div class="col-md-4">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->intro }}</p>
            <p><a href="/posts/{{ $post->id }}" class="btn btn-default">Читать далее</a></p>
        </div>
    @endforeach
</div>

    <br><br>

    @include('_common._form')


    <div class="text-right"><b>Всего сообщений:</b><li class="badge"> {{ isset ($count)? $count : 'нет счетчика'  }}</li></div><br/>

    @//include('pages.messages._items')




@stop