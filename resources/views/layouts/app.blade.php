@yield('php')

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('images/b.png')}}" type="image/x-icon">
        <link rel="icon" href="{{asset('images/b.png')}}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bapenda') }}</title>

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

    <link rel="stylesheet" href="{{ asset('jquery/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{asset('jquery/jquery-editable-select.min.css')}}">

    <!-- Gallery -->
    <link rel="stylesheet" type="text/css" href="{{asset('gallery/blueimp-gallery.min.css')}}">

    @yield('css')

</head>
<body>
    <div id="app">
        @include('layouts.navbar')

        <div class="m-b-md"></div>
        @yield('content')


    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
        <!-- The container for the modal slides -->
        <div class="slides"></div>
        <!-- Controls for the borderless lightbox -->
        <h3 class="title">Title</h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">&times;</a>
        <!-- The modal dialog, which will be used to wrap the lightbox content -->    
    </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('jquery-3.1.1.min.js') }}"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- DataTable JS -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('jquery/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('jquery/jquery-editable-select.min.js')}}"></script>

    <!-- Gallery -->
    <script type="text/javascript" src="{{ asset('gallery/blueimp-gallery.min.js')}}"></script>

    @yield('js')
</body>
</html>
