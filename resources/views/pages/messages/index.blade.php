@extends('index')
@section('content')




    @include('_common._form')


    <div class="text-right"><b>Всего сообщений:</b><li class="badge"> {{ $count  }}</li></div><br/>

    @include('pages.messages._items')

@stop