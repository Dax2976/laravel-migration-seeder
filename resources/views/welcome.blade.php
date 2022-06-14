<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Styles -->
    </head>
    <body>
        <h1 class="text-center">Vacation Package</h1>
        <div class="content">
            @foreach ($vacations as $vacation)
                <div class="card">
                    <p><strong>City:</strong>{{$vacation->city}}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>
