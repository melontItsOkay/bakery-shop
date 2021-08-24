<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Bakery Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
     
    <!-- styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap-responsive.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/docs.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/prettyPhoto.cs') }}s" rel="stylesheet">
    <link href="{{ url('assets/js/google-code-prettify/prettify.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/sequence.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/color/default.css') }}" rel="stylesheet">

    

    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="{{ url('assets/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ url('assets/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ url('assets/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ url('assets/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ url('assets/ico/apple-touch-icon-57-precomposed.png') }}">
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">

    @include('partials.header')

    @yield('content')
    <!-- Footer
   ================================================== -->
    
   @include('partials.footer')
