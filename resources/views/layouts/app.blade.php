<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Unidad de Remuneraciones') }}</title>

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

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{ asset('static/js/plugins/prism/prism.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('static/js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('static/js/plugins/jvectormap/jquery-jvectormap.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('static/js/plugins/chartist-js/chartist.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- Scripts -->
    <script>window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?></script>
</head>
<body>
<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="navbar-color">
            <div class="nav-wrapper">
                <ul class="left">
                    <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="{{ asset('static/images/materialize-logo.png') }}" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                </ul>
                <div class="header-search-wrapper hide-on-med-and-down">
                    <i class="mdi-action-search"></i>
                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                </div>
                <ul class="right hide-on-med-and-down">

                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>

                        </a>
                    </li>
                    <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                    </li>
                </ul>
                <ul id="notifications-dropdown" class="dropdown-content">
                    <li>
                        <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->


<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="{{ asset('static/images/avatar.jpg') }}" alt="" class="circle responsive-img valign profile-image">
                        </div>
                        <div class="col col s8 m8 l8">
                            <ul id="profile-dropdown" class="dropdown-content">
                                <li>
                                    <a href="#"><i class="mdi-action-face-unlock"></i> Perfil</a>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi-action-settings"></i> Config</a>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi-communication-live-help"></i> Ayuda</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="mdi-hardware-keyboard-tab"></i>
                                        Salir
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                </li>
                            </ul>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">{{ auth()->user()->name }}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                            <p class="user-roal">{{ $rol->nombre }}</p>
                        </div>
                    </div>
                </li>
                <li class="bold active">
                    <a href="{{ url('plare') }}" class="waves-effect waves-cyan">
                        <i class="mdi-action-dashboard"></i> Dashboard</a>
                </li>

                @forelse( $rol->modulos as $modulo )
                    <li class="bold">
                        <a href="{{ url( 'plare/'.$modulo->url ) }}" class="waves-effect waves-cyan waves-cyan">
                            <i class="mdi-social-pages"></i> {{ $modulo->nombre }}</a>
                    </li>
                @empty
                    No hay modulos activos
                @endforelse

            </ul>

            <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->
<!-- //////////////////////////////////////////////////////////////////////////// -->

@yield('content')

<!-- //////////////////////////////////////////////////////////////////////////// -->

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->

<!-- START FOOTER -->
<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
            Copyright © 2016 <a class="grey-text text-lighten-4" href="" target="_blank">Universidad Nacional del Altiplano - Puno</a> All rights reserved.
            <span class="right"> <a class="grey-text text-lighten-4" href="http://geekslabs.com/"></a></span>
        </div>
    </div>
</footer>
<!-- END FOOTER -->


<!-- ================================================
Scripts
================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="{{ asset('static/js/plugins/jquery-1.11.2.min.js') }}"></script>
<!--angularjs-->
<script type="text/javascript" src="{{ asset('static/js/plugins/angular.min.js') }}"></script>
<!--materialize js-->
<script type="text/javascript" src="{{ asset('static/js/materialize.min.js') }}"></script>
<!--prism -->
<script type="text/javascript" src="{{ asset('static/js/plugins/prism/prism.js') }}"></script>
<!--scrollbar-->
<script type="text/javascript" src="{{ asset('static/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

<!-- chartist -->
<script type="text/javascript" src="{{ asset('static/js/plugins/chartist-js/chartist.min.js') }}"></script>

<!-- chartjs -->
<script type="text/javascript" src="{{ asset('static/js/plugins/chartjs/chart.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('static/js/plugins/chartjs/chart-script.js') }}"></script>

<!-- sparkline -->
<script type="text/javascript" src="{{ asset('static/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('static/js/plugins/sparkline/sparkline-script.js') }}"></script>

<!-- google map api -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>

<!--jvectormap-->
<script type="text/javascript" src="{{ asset('static/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('static/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script type="text/javascript" src="{{ asset('static/js/plugins/jvectormap/vectormap-script.js') }}"></script>

<!--google map-->
<script type="text/javascript" src="{{ asset('static/js/plugins/google-map/google-map-script.js') }}"></script>


<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="{{ asset('static/js/plugins.min.js') }}"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="{{ asset('static/js/custom-script.js') }}"></script>

<!--editabletable-->
<script type="text/javascript" src="{{ asset('static/js/plugins/editable-table/mindmup-editabletable.js') }}"></script>
<script type="text/javascript" src="{{ asset('static/js/plugins/editable-table/numeric-input-example.js') }}"></script>

<!-- Toast Notification -->
<script type="text/javascript">


    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#textAreaEditor').editableTableWidget({editor: $('<textarea>')});
    window.prettyPrint && prettyPrint();

</script>
</body>
</html>









