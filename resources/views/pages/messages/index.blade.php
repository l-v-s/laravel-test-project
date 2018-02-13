@extends('index')
@section('content')


    @include('_common._form')


    <div class="text-right"><b>Всего сообщений:</b><li class="badge">0</li></div><br/>

    <div class="messages">
        <div class="panel panel-default">

    <div class="panel-heading">
        <h3 class="panel-title">

            <span>Карлсон</span>

            <span class="pull-right label label-info">17:15:00 / 03.07.15</span>
        </h3>
    </div>
     <div class="panel-body">
         Я спешил к вам
         Я спешил к вам
         Я спешил к вам
         Я спешил к вам
         <hr/>
         <div class="pull-right">
             <a href="#" class="btn btn-info">
                 <li class="glyphicon glyphicon-pencil"></li>
             </a>
             <button class="btn btn-danger">
                 <li class="glyphicon glyphicon-trash"></li>
             </button>
         </div>

     </div>


        </div>

    </div>
@stop