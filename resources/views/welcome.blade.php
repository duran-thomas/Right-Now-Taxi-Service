<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Right Now Taxi Service</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-repeat: no-repeat;
	            background-position: center;
	            background-attachment: fixed;
	            background-size: 100%;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 86px;
                font-family: Arial, Helvetica, sans-serif;
                color: #bc1e29;
                border-left: 6px solid teal;
                background-color: lightgrey;             
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                border: 2px solid black;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body background="{{ URL::asset('/')}}images/2.jpg">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Right Now Taxi Service
<<<<<<< HEAD
=======
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Request A Cab</a>
                    <a href="https://laracasts.com">Request A Quote</a>
                    <a href="https://laracasts.com">About Us</a>
                    <a href="https://laracasts.com">Contact Us</a>
>>>>>>> da6e3f8bc99d82a18c5f4e73cc96cfbc4dbc209e
                </div>
            </div>
        </div>
    </body>
</html>
