<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('images/logobapenda.png')}}" type="image/x-icon">
        <link rel="icon" href="{{asset('images/logobapenda.png')}}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap Core -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- DataTable Plugin -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        @include('layouts.navbar')

        <div class="m-b-md"></div>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('jquery-3.1.1.min.js') }}"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- DataTable JS -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    @yield('js')
</body>
</html>
