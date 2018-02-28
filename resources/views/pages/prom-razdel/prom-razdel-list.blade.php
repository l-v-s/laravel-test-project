@extends('promrazdelindex')


@section('content')

<li class="row">
    <?
        $i = 1;
    ?>
    <ol>
    @foreach($razdels as $razdel)
        <li>
            <a href="/prom-razdel/{{ $razdel->id }}/edit" class="card-link">{{ $razdel->name }}</a>
            {{ !Empty($razdel->opis)? '('.$razdel->opis.')':'' }}

        </li>
    @endforeach
    </ol>
</div>



@stop
