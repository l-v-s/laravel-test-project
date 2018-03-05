@extends('intera_index')

@section('submenu')
    @include('pages.providers.submenu')
@endsection


@section('content')


<h5>Изменения сохранены.</h5>
<a href="/providers/razdels/create" class="card-link">Добавить новый раздел</a>
<br><br>
<a href="/providers/razdels/" class="card-link"><< перейти к списку</a>



@stop