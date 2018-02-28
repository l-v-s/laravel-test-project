<?
/*
$mas = [
    ['name' => 'имя первое',
        'fio' => 'фио',
        'art' => '1'],

    ['name' => 'имя третье',
    'fio' => 'фио3',
        'art' => ''],

    ['name' => 'имя второе',
        'fio' => 'фио2',
        'art' => '2']
];

usort($mas,function($a,$b){
    if (empty($a['art']))
        $a['art'] = 1;

    if (empty($b['art']))
        $b['art'] = 1;

    if ($a['art'] && $b['art']){
        return $b['art']-$a['art'];
    }
    else {
        if ($a['art'])
            return $a['art'];

        if ($b['art'])
            return $b['art'];
    }
    dd ('не работает');
    //return $a['art']-$b['art'];
});

dd ($mas);
{{ $mas[0]['name'] }}
*/
?>




@extends('blogindex')

@section('content')

    @include('_common.blog_form')

    @include('pages.posts.errors')

@endsection
