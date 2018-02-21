@extends('blogindex')

@section('content')

<div class="blog-post">
    <h2 class="blog-post-title">{{ isset($post)? $post->title:'' }}</h2>
    <p>
        {{ isset($post)? $post->body:'' }}

    </p>
</div>

@endsection
