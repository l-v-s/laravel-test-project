@extends('intera_index')

@section('submenu')
    @include('pages.providers.submenu')
@endsection


@section('content')

    <h4>Редактирование раздела поставщиков:</h4>

    @include('_common._providers_razdel-form')



@stop