<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('tilte')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar"></div>
            <a href="/" class="navbar-brand">
                Site do carlos
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">EVENTOS</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">CRIAR EVENTOS</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">ENTRAR</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">CADASTRAR</a>
                </li>
            </ul>
        </nav>
    </header>
    @yield('content')
    <footer>
        <p>Olha lá &copy;</p>
    </footer>
</body>

</html>
