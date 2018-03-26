@extends('intera_index')

@section('submenu')
    @include('pages.products.submenu')
@endsection


@section('content')


<h5>Изменения сохранены.</h5>
<a href="/products/create" class="card-link">Добавить новый товар</a>
<br><br>
<a href="/products/" class="card-link"><< перейти к списку товаров</a>



@stop