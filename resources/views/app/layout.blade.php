<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Warehouse</title>
        <link charset="utf-8" href="{{asset('vendor/bootstrap/dist/css/bootstrap.min.css')}}" media="screen" rel="stylesheet" title="no title">
    </head>
    <body>
        <nav class="navbar navbar-static-top navbar-dark bg-inverse">
            <a class="navbar-brand" href="#">Project name</a>
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/company/list">Companies</a>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
    <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"/>
</html>
