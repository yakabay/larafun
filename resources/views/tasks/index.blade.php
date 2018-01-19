<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <div>
            <ul>
                @foreach($tasks as $task)
                    <li>{{ $task->body }}</li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
