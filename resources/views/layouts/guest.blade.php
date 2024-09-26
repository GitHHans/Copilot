<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', config('app.name', 'Copilot'))</title>
        
        <!-- Web Icon -->
        <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Icons --> 
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" class="href">
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

         <!-- Jquery -->
         <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">-->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/handle_login.js'])


        <style>
            .login-parent-div {
                position: relative;
            }
            .floater-container {
                position:relative;
                width: 100%;
                height: auto;
                overflow: visible;
            }
            .custom-font {
                font-family: 'Poppins', sans-serif; /* Use Poppins for headings as well */
                font-style: italic;
                font-weight: 700; /* Bold weight for headings */
            }
            .center-text {
                font-size: 1em;
                text-align: center;
                display: flex;
                align-items: center;
                justify-content: center;
                background: #002D3C;
            }

             /* 6214503_air_airplane_logo_paper_plane_icon 1 */

            .airplane-icon{
                position: absolute;
                z-index: 10;
                bottom: 0;
                left: 0;
                width: 6em;
                height: auto;
                transform: translate(-50%, 50%);
                transition: transform 2s linear;
            }
            
        </style>

    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="login-parent-div min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <x-application-logo class="w-full h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="floater-container w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>

    <script link=""></script>
</html>
