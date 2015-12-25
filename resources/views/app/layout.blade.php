<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Warehouse</title>
        <link charset="utf-8" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" media="screen" rel="stylesheet" title="no title">
        <link charset="utf-8" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" media="screen" rel="stylesheet" title="no title">
    </head>
    <body>
        <script src="{{asset('vendor/jquery/jquery.min.js')}}" type="text/javascript"/>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"/>
        <script type="text/javascript">
            $(function() {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
        <nav class="navbar navbar-static-top navbar-dark bg-inverse">
            <a class="navbar-brand" href="#">Project name</a>
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('company_list')}}">Companies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('invoice_list')}}">Invoices</a>
                </li>
            </ul>
        </nav>
        <div class="container-fluid p-a-2">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
