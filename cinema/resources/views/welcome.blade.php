<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <!--require Illuminate\Support\HTMLFacades\URL-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Cinema</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- First include jquery js -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <style>
            #img_cinema{
                background-size: cover;
                background-image: url({{ asset('images/sala_cinema.jpg') }});
            }
        </style>
    </head>
    <body>
        <div id="img_cinema" class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div id="header" class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="/cinema/">Home</a>
                        <a href="/cinema/filmes/">Filmes</a>
                        <a href="/cinema/elencos/">Elencos</a>                        
                        <a href="/cinema/sessoes/">Sessoes</a>
                    @endauth
                </div>
            @endif
            <div class="content">
                @yield('alert')
                @yield('content')
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
