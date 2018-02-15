<div class="messages">

    @if ( ! $messages->isEmpty())

        @foreach($messages as $message)

    <div class="panel panel-default">

        <div class="panel-heading">
            <h3 class="panel-title">

                <span>
                    #{!! $message->id !!}
                    @unless (empty($message->email))
                        <a href="mailto:{{ $message->email }}">{{ $message->name }}</a>
                    @else
                        {{ $message->name }}
                    @endunless
                </span>

                <span class="pull-right label label-info">
                    {{--17:15:00 / 03.07.15--}}
                {{ $message->created_at }}
                </span>
            </h3>
        </div>
        <div class="panel-body">
            {{ $message->message }}
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

        @endforeach
        @endif

    <div class="tab-content">
        {!! $messages->render() !!}
    </div>


</div>