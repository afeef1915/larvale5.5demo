<!--<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
        
       
    </body>
</html>-->
<!--Header HTML code from E-Shopper Template-->
{{asset('css/name.css')}}
{{url('products')}}

@yield('content')

<!--Footer HTML code from E-Shopper Template-->