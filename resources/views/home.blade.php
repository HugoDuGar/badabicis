@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
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
        </style>
    </head>
    <body>

        <div id ="map"></div>
        <script>
            var puntoPropio = [38.87936789308587, -6.977472083620556];

            var map = L.map('map').setView(puntoPropio, 13);

            var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

            var LeafIcon = L.icon({iconUrl: 'images/icon.png'});

            var marcadorPHP = L.marker(puntoPropio, {icon: LeafIcon}).addTo(map);
        </script>
    </body>
    </html>

@endsection
