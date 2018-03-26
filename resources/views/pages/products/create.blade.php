@extends('intera_index')

@section('submenu')
    @include('pages.products.submenu')
@endsection


@section('content')

    <h4>Добавление товара:</h4>

    @include('_common._product-form')



@stop