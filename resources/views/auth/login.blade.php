<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>. . . : : Oficina de Remuneraciones : : . . .</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons-->
    <link rel="icon" href="{{ asset('static/images/favicon/favicon-32x32.png') }}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('static/images/favicon/apple-touch-icon-152x152.png') }}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{ asset('static/images/favicon/mstile-144x144.png') }}">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->

    <link href="{{ asset('static/css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('static/css/style.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="{{ asset('static/css/custom/custom.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('static/css/layouts/page-center.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{ asset('static/js/plugins/prism/prism.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('static/js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body class="cyan">
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        <form class="login-form" role="form" method="POST" action="{{ url('/login') }}">

            {{ csrf_field() }}

            <div class="row">
                <div class="input-field col s12 center">
                    <img src="{{ asset('static/images/unap-logo.png') }}" alt="" class=" responsive-img valign profile-image-login">
                    <p class="center login-form-text"> Oficina de Remuneraciones </p>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    <label for="username" class="center-align">E-mail</label>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="password" type="password" name="password" required>
                    <label for="password">Contraseña</label>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif


                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12  login-text">
                    <input type="checkbox" id="remember-me" />
                    <label for="remember-me">Recordar Contraseña</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light col s12">Acceder</button>
                </div>
            </div>

        </form>
    </div>
</div>



<!-- ================================================
  Scripts
  ================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="{{ asset('static/js/plugins/jquery-1.11.2.min.js') }}"></script>
<!--materialize js-->
<script type="text/javascript" src="{{ asset('static/js/materialize.min.js') }}"></script>
<!--prism-->
<script type="text/javascript" src="{{ asset('static/js/plugins/prism/prism.js') }}"></script>
<!--scrollbar-->
<script type="text/javascript" src="{{ asset('static/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="{{ asset('static/js/plugins.min.js') }}"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="{{ asset('static/js/custom-script.js') }}"></script>

<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>


</body>
</html>