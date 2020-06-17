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
        <h1> page create</h1>

        <form action="/restaurants/create" method='post'>
             {{ csrf_field() }}
            <label for="name">Title of the restaurant</label>
            <input type="text" name="name" id="name">
            <input type="submit" value="Submit"></input> 
        </form>
    </body>
</html>
