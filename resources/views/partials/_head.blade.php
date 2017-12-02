<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> {{$title}}: GAC Hymn Server</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="_token" content="{!! csrf_token() !!}" />
    <link href="{{ asset('css/paper.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>
    @yield('stylesheet')
</head>