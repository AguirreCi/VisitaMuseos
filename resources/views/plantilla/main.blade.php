<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title','Default') | Visita Museos </title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Styles -->

    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/MDBootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/MDBootstrap/css/mdb.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/MDBootstrap/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/lightbox/bootstrap-lightbox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap-social/bootstrap-social.css') }}">
        <link rel="stylesheet" href="https://cdn.rawgit.com/yahoo/pure-release/v0.6.0/pure-min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/yahoo/pure-release/v0.6.0/grids-responsive-min.css">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style type="text/css">
        .nav-pills .nav-link.active, .show>.nav-pills .nav-link{
            background-color: #424242;
        }

        .btn-outline-rosa {
          border: 2px solid #FF397D;
          color: #FF397D !important;
          background-color: transparent; }
          .btn-outline-rosa:hover, .btn-outline-rosa:focus, .btn-outline-rosa:active, .btn-outline-rosa:active:focus, .btn-outline-rosa.active {
            background-color: transparent;
            color: #FF397D;
            border-color: #FF397D; }

        .btn-outline-verde {
          border: 2px solid #9AE000;
          color: #9AE000 !important;
          background-color: transparent; }
          .btn-outline-verde:hover, .btn-outline-verde:focus, .btn-outline-verde:active, .btn-outline-verde:active:focus, .btn-outline-verde.active {
            background-color: transparent;
            color: #9AE000;
            border-color: #9AE000; }

        .btn-rosa {
          background-color: #FF397D; }
          .btn-rosa:hover, .btn-rosa:focus, .btn-rosa:active, .btn-rosa.active {
            background-color: #FF397D !important; }
          .btn-rosa.dropdown-toggle {
            background-color: #FF397D !important; }
            .btn-rosa.dropdown-toggle:hover, .btn-rosa.dropdown-toggle:focus {
              background-color: #FF397D !important; }

        .btn-verde {
          background-color: #9AE000; }
          .btn-verde:hover, .btn-verde:focus, .btn-verde:active, .btn-verde.active {
            background-color: #9AE000 !important; }
          .btn-verde.dropdown-toggle {
            background-color: #9AE000 !important; }
            .btn-verde.dropdown-toggle:hover, .btn-verde.dropdown-toggle:focus {
              background-color: #9AE000 !important; }

        .btn-naranja {
          background-color: #FF642F; }
          .btn-naranja:hover, .btn-naranja:focus, .btn-naranja:active, .btn-naranja.active {
            background-color: #FF642F !important; }
          .btn-naranja.dropdown-toggle {
            background-color: #FF642F !important; }
            .btn-naranja.dropdown-toggle:hover, .btn-naranja.dropdown-toggle:focus {
              background-color: #FF642F !important; }

        .btn-amarillo {
          background-color: #FFE96E; }
          .btn-amarillo:hover, .btn-amarillo:focus, .btn-amarillo:active, .btn-amarillo.active {
            background-color: #FFE96E !important; }
          .btn-amarillo.dropdown-toggle {
            background-color: #FFE96E !important; }
            .btn-amarillo.dropdown-toggle:hover, .btn-amarillo.dropdown-toggle:focus {
              background-color: #FFE96E !important; }


    </style>

</head>

<body>
    
    @include('plantilla.modulos.barra')

	<section>
        @yield('contenido')
	</section>

    @include('plantilla.modulos.pie')

	<!-- SCRIPTS -->
    <script type="text/javascript" src="{{ asset('bower_components/MDBootstrap/js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/MDBootstrap/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/MDBootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/MDBootstrap/js/mdb.min.js') }}"></script>

    <!-- JQuery -->
    
    <script type="text/javascript" src="{{ asset('bower_components/parallax/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/parallax/parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/dropzone/dropzone.js') }}"></script>

    <script type="text/javascript" src="{{ asset('bower_components/puzzle/jquery.snap-puzzle.js') }}"></script>

</body>

</html>