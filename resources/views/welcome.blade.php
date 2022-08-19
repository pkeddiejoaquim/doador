<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Doador-Teste') }}</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ url('images/sistema/att-cubo-branco.png') }}" rel="shortcut icon" />
        <link href="{{ url('css/magatt.css') }}" type="text/css" rel="stylesheet" >
        <link href="{{ url('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" >

    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ url('home') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class='fas fa-user-clock'></i>{{ Auth::user()->name }}
                        </a>

                    @else

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('login') }}" role="button" data-toggle="dropdraw" aria-haspopup="true">
                            <i class='fas fa-user-lock'></i>Login
                        </a>
                    <!--    <a href="{{ route('register') }}">Registrar</a>-->
                        <a href="construcao">Registrar</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <center><img width='100' src='images/sistema/att-cubo-branco.png' alt='Logo magatt' /></center>
                    <div style="color: #636b6f; padding: 50px 0px 25px 0px; font-size: 20px;
                                font-weight: 600; letter-spacing: .1rem; text-transform: lowercase;">
                        {{ config('app.name', 'magazineaquitudotem.com') }}
                    </div>

                <div class="links">

                    <a href="doador">DOADOR-Cadastro</a>
                    <a href="construcao">CONSTRUÇÃO</a>


                </div>
            </div>
        </div>

    </body>
</html>
