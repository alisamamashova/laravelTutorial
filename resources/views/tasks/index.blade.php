<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="./css/welcome.css">

    </head>
    <body>
        <div>

            <h2>LARAVEL WORKS</h2>

            {{--@if($toDisplay)--}}
                <ul>

                    @foreach($tasks as $task)
                        <li>{{ $task->body}} ID: {{ $task->id }}
                            <span id="{{$task->id}}" class="{{$task->id}}">hello</span>
                            <a href="/tasks/{{$task->id}}">Узнать больше</a></li>
                        @endforeach
                </ul>
            {{--@endif--}}

        </div>
    </body>
</html>
