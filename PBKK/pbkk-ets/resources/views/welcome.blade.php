<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VinylVortex</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=albert-sans:400,700" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-image: url('/img/vinyl-store-2.jpg'); /* Change this to your image path */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            color: #fff;
            font-family: 'Albert Sans', sans-serif;
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
            flex-direction: column; /* Center content vertically */
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
            padding: 20px; /* Space around the content */
            background: transparent; /* Optional: Semi-transparent background for better text visibility */
            border-radius: 10px; /* Optional: Rounded corners */
        }

        .title {
            font-size: 84px;
            display: flex;
            align-items: center; /* Center items vertically */
        }

        .title img {
            height: 50px; /* Set a fixed height for the logo */
            margin-right: 10px; /* Space between logo and text */
        }

        .title a {
            color: #ffffff; /* Set text color to white */
            text-decoration: none; /* Remove underline */
        }

        .links > a {
            color: #ffffff;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            
        }
    </style>
</head>
<body>
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

        <div class="content bg-transparent">
            <div class="title">
                <a class="d-flex" href="{{ url('/') }}" style="display: flex; align-items: center;">
                    <img src="/img/VinylVortex-white.png" style="height: 70px; padding-right: 10px;" alt="VinylVortex Logo">
                    <div>VinylVortex</div>
                </a>
            </div>
            <p style="padding-top: 0px;">Find your favorite vinyls here.</p>
        </div>
    </div>
</body>
</html>
