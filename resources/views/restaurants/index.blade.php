<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>

        <h1> display restaurant </h1>

        @foreach ($restaurants as $restaurant)
            <h2> {{$restaurant->name}} </h2>
            <p> {{$restaurant->description}} </p>

        @endforeach
    </body>
</html>
