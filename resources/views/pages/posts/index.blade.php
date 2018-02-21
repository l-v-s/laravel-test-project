@extends('blogindex')

<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

?>

@section('content')

    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->intro }}</p>
                <p class="lead"></p>
                <p><a href="/posts/{{ $post->id }}" class="btn btn-secondary">Читать далее</a></p>
                <p><a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Редактировать</a></p>
                <form action="/post/{{ $post->id }}" method="post">
                    {{csrf_field()}}
                    {!! method_field('delete') !!}
                    <button class="btn btn-danger" type="submit">Удалить</button>
                </form>
            </div>
        @endforeach
    </div>

@endsection
