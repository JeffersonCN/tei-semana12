<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Concessionária - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.css"/>
    <style>
        body {
            padding-left: 170px;
            background-color: #f0f0f0;
        }
        .sidebar a {
            font-size: 18px;
        }

        .pusher {
            height: 100vh;
            padding: 40px;
        }

        form {
            padding: 20px;
        }

        input {
            text-align: center !important;
        }

        .swing-down, #resultados {
            visibility: hidden;
        }

        .segment p {
            font-size: 16px;
        }
    </style>
</head>
<body>
<div class='ui visible inverted blue sidebar vertical labeled icon menu'>
    <a href='{{ route('veiculos.index') }}' class='item'>
        <i class='car left icon'></i> Veículos
    </a>
</div>
<div class='pusher'>
    <h1 class='ui header'>@yield('title')</h1>
    <div class='ui divider'></div>
        <div class='blue card'>
            <div class='content'>
                    @yield('content')
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
</body>
</html>