<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">

      

    </head>
    <body>
        <h1>Bla nla bla</h1>
        @if ( $idade  > 15)
        <p>Meu nome é {{$nome}}, tenho {{$idade}} anos e trabalho sendo {{$profissao}}</p>
        
        @endif

            
    <script src="js/javascript.js"></script>
    </body>
</html>
