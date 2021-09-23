<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CargoFive</title>
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
        <body>
        <!-- Navbar -->
        <header>
        <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CargoFive</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('contract.create')}}">Importar</a>
                    </li>
                </ul>
            </div>
        </nav>
        </header>
            @yield('content')
        </body>
</html>
