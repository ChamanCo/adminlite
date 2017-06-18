<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="256x256" href="{{ asset('vendor/adminlite/img/favicon.ico') }}" />
    <link rel="icon" href="{{ asset('vendor/adminlite/img/favicon.ico') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin | {{ config('adminlite.application_name') }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('vendor/adminlite/css/material-dashboard.css') }}" rel="stylesheet"/>

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="orange">
        <div class="logo">
            <a href="{{ url('/') }}" class="simple-text">
                {{ config('adminlite.application_name') }}
            </a>
        </div>

        <div class="sidebar-wrapper">
            @include('adminlite::layouts.sidebard')
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">@yield('title', 'Admin Dashboard')</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-danger">
                                <p class="text-danger">Déconnexion</p>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                        <li>
                            <a href="{{ url('/')  }}" class="text-info">
                                <p class="text-info">Retour au site</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="{{ url('/') }}">{{ config('adminlite.application_name') }}</a>
                </p>
            </div>
        </footer>
    </div>
</div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.9.4/chartist.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script src="{{ asset('vendor/adminlite/js/bootstrap-notify.js') }}"></script>
<script src="{{ asset('vendor/adminlite/js/material.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/adminlite/js/material-dashboard.js') }}"></script>

</html>
