<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Master</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset( 'css/estilo.css') }}">
    @yield('css-view')
</head>

<body>
    @yield('conteudo-view')
    @yield('js-view')
</body>
</html>