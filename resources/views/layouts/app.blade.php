<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') - Laravel App</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.5.1/tailwind.min.css">
        <style>
            body {
                padding: 0;
                margin: 0;
                overflow-x: hidden;
            }
            html, body, #map{
                height: 100%;
                width: 100%;
            }
            .sidenav {
                height: 100%; /* 100% Full-height */
                width: 0; /* 0 width - change this with JavaScript */
                position: fixed; /* Stay in place */
                z-index: 1000; /* Stay on top */
                top: 0;
                left: 0;
                background-color: #f86464; /* Black*/
                overflow-x: hidden; /* Disable horizontal scroll */
                padding-top: 60px; /* Place content 60px from the top */
                transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
            }

            .sidenav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: white;
                display: block;
                transition: 0.3s
            }
            .sidenav a:hover, .offcanvas a:focus{
                color: gray;
            }
            .sidenav .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }
            #main {
                transition: margin-left .5s;
                padding: 20px;
                overflow:hidden;
                width:100%;
            }
            .topnav {
                background-color: #333;
                overflow: hidden;
            }
            .topnav a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }
            .topnav a:hover {
                background-color: #ddd;
                color: #f86464;
            }
            .topnav a.active {
                background-color: #4CAF50;
                color: white;
            }
            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
            }
            svg {
                transition: all .5s ease;
            }

            svg:hover {
                transform: rotate(180deg);
            }
            #ico{
                display: none;
            }
            .menu {
                background: #f86464;
                display: none;
                padding: 5px;
                width: 320px;
                border-radius: 5px;
                transition: all 0.5s ease;
            }

            .menu a {
                display: block;
                color: #fff;
                text-align: center;
                padding: 10px 2px;
                margin: 3px 0;
                text-decoration: none;
                background: #f86464;
            }

            .menu a:nth-child(1) {
                margin-top: 0;
                border-radius: 3px 3px 0 0;
            }

            .menu a:nth-child(5) {
                margin-bottom: 0;
                border-radius: 0 0 3px 3px;
            }

            .menu a:hover {
                background: #555;
            }
        </style>
        <script>
            function openNav() {
                document.getElementById("sideNavigation").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }
            function closeNav() {
                document.getElementById("sideNavigation").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }
        </script>

    </head>
    <body class="bg-gray-100 text-gray-800">



        <nav class="flex py-5 bg-red-500 text-white" class="topnav">
            <div id="sideNavigation" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="{{ route("estados.blade") }}">Estado de los puestos</a>
                <a href="{{ route("avisos.blade") }}">Avisos</a>
                <a href="{{ route("contratos.blade") }}">Contratos</a>
                <a href="{{ route("prestamos.blade") }}">Prestamos</a>
                <a href="{{ route("reservas.blade") }}">Reservas</a>
                <a href="{{ route("incidencias.blade") }}">Incidencias</a>
                <a href="{{ route("informacion.blade") }}">Informacion</a>
                <a href="#">Acerca de</a>
            </div>
            <a href="#" onclick="openNav()">
                <svg width="30" height="30" id="icoOpen">
                    <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
                    <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
                    <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
                </svg>
            </a>
            <div class="w-1/2 px-12 mr-auto">
                <p class="text-2xl font-bold">Badabicis</p>
            </div>

            <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            @if(auth()->check())
                <li class="mx-6">
                    <p class="text-xl">Bienvenido al infierno <b>{{ auth()->user()->name }}</b></p>
                </li>
                <li class="mx-6">
                    <a href="{{ route('login.destroy') }}" class="font-semibold hover:bg-red-800 py-3 px-4">Cerrar sesion</a>
                </li>
            @else
                <li class="mx-6">
                    <a href="{{ route('login.index') }}" class="font-semibold hover:bg-indigo-700 py-3 px-4">Login</a>
                </li>
                <li>
                    <a href="{{ route('register.index') }}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Register</a>
                </li>
            @endif
            </ul>
        </nav>

        @yield('content')
    </body>
</html>
