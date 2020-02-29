<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Task Laravel</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{asset('css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{asset('css/timeline.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('css/startmin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{asset('css/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css">
        @yield('css')
    </head>
    <body>
        <div id="wrapper">