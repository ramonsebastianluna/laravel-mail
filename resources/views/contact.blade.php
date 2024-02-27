<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
    </head>
    <body>
        <h1>Conctact</h1>
        <form method="POST" action="{{ route('contact') }}">
            @csrf
            <input name="nombre" type="text" placeholder="Nombre"><br>
            <input name="apellido" type="text" placeholder="Apellido"><br>
            <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
            <button type="submit">Send Form!</button>
        </form>
    </body>
</html>