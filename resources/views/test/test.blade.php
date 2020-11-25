<html>
    <head>
    <title>App Name - @yield('title')</title>
    </head>
    <body>
    <h1>Laravel</h1>

Hello, @{{ name }}.<br>
        @section('sidebar')
            This is the master sidebar  
            
        @show

        @yield('k')

        <div class="container">
            @yield('content')
        </div>
@section('s')
fdfddddd
@endsection
@yield('s')
    </body>
</html>