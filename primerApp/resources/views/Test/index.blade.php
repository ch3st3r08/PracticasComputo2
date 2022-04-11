<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        @include("nav")
        <h1>{{$title}}</h1>
        <h1>{{$descripcion}}</h1>
        <h1>{{$studentName}}</h1>
    </body>
</html>