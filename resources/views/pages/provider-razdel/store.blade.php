@extends('intera_index')

@section('submenu')
    @include('pages.provider-razdel.submenu')
@endsection


@section('content')


<h5>Изменения сохранены.</h5>
<a href="/provider-razdel/create" class="card-link">Добавить новый раздел</a>
<br><br>
<a href="/provider-razdel/" class="card-link"><< перейти к списку</a>



@stop