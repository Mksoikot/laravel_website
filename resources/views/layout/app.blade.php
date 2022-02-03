<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
        <link rel="stylesheet" href="{{asset('css/custom.css')}}" >

    </head>
    <body>
        @include('layout.Menu')


        @yield('content')



        @include('layout.Footer')

        <script src="{{asset('js/jquery-3.6.0.slim.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
    </body>
</html>
