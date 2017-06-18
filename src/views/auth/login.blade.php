<html>
<head>
    <title>Admin | Connexion</title>
    <link rel="stylesheet" href="{{ asset('vendor/adminlite/css/login.css') }}">
</head>

<body>
<hgroup>
    <h1>Admin - Connexion</h1>
</hgroup>
<form action="{{ route('login') }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="remember" value="1">
    <div class="group">
        <input type="email" name="email" id="email" required autofocus><span class="highlight"></span><span class="bar"></span>
        <label for="email">E-mail</label>
    </div>
    <div class="group">
        <input type="password" name="password" id="password" required><span class="highlight"></span><span class="bar"></span>
        <label for="password">Mot de passe</label>
    </div>
    <button type="submit" class="button buttonBlue">Connexion
        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
</form>
<footer>
    <a href="{{ url('/') }}"><img src="{{ asset(config('adminlite.logo_path')) }}"></a>
    <p>Admin - <a href="{{ url('/') }}">{{ config('adminlite.application_name') }}</a></p>
</footer>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="{{ asset('vendor/adminlite/js/login.js') }}"></script>

</body>

</html>
