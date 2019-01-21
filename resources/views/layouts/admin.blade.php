<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Renny Travel</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        
        <!-- Styles -->
        <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link type="text/css" rel="stylesheet" href="{{ asset('administrador') }}/plugins/materialize/css/materialize.min.css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('administrador') }}/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
        <link href="{{ asset('administrador') }}/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
        <!-- Theme Styles -->
        <link href="{{ asset('administrador') }}/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('administrador') }}/css/custom.css" rel="stylesheet" type="text/css"/>
        @yield('css')
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body ng-app="app" ng-controller="ctrl">
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="tokenglobal" value="{{ csrf_token() }}">
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="cyan darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="#" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3">      
                            <span class="chapter-title">Administrador</span>
                        </div>
                        <ul class="right col s9 m3 nav-right-menu">
                            <li>
                                <a onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="material-icons">exit_to_app</i>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p>Renny</p>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-account-settings">
                        <ul>
                            <!-- <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">mail_outline</i>Perfil</a>
                            </li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">done</i>Contraseña</a>
                            </li>
                            <li class="divider"></li> -->
                            <li class="no-padding">
                                <a class="waves-effect waves-grey" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="material-icons">exit_to_app</i>
                                    Cerrar Sesión
                                </a>
                            </li>
                        </ul>
                    </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <!--li class="no-padding {{ Request::is('admin/reservas')?'active':'' }}">
                        <a class="waves-effect waves-grey" href="{{ url('/admin/reservas') }}">
                            <i class="material-icons">assignment</i>Reservas
                        </a>
                    </li-->
                    <li class="no-padding {{ Request::is('admin/traslados')?'active':'' }}">
                        <a class="waves-effect waves-grey" href="{{ url('/admin/traslados') }}">
                            <i class="material-icons">directions_car</i>Traslados
                        </a>
                    </li>
                    <li class="no-padding {{ Request::is('admin/tours')?'active':'' }}">
                        <a class="waves-effect waves-grey" href="{{ url('/admin/tours') }}">
                            <i class="material-icons">directions_boat</i>Tours
                        </a>
                    </li>
                    <li class="no-padding {{ Request::is('admin/vip')?'active':'' }}">
                        <a class="waves-effect waves-grey" href="{{ url('/admin/vip') }}">
                            <i class="material-icons">settings_input_svideo</i>VIP
                        </a>
                    </li>
                    <li class="no-padding {{ Request::is('admin/wifi')?'active':'' }}">
                        <a class="waves-effect waves-grey" href="{{ url('/admin/wifi') }}">
                            <i class="material-icons">wifi</i>Wifi
                        </a>
                    </li>
                    <li class="no-padding {{ Request::is('admin/coupon')?'active':'' }}">
                        <a class="waves-effect waves-grey" href="{{ url('/admin/coupon') }}">
                            <i class="material-icons">bookmark_border</i>Cupones
                        </a>
                    </li>
                    <li class="no-padding {{ Request::is('admin/agency')?'active':'' }}">
                        <a class="waves-effect waves-grey" href="{{ url('/admin/agency') }}">
                            <i class="material-icons">business_center</i>Agencias
                        </a>
                    </li>
                    @if(Auth::user()->id == 1)
                        <li class="no-padding {{ Request::is('admin/users')?'active':'' }}">
                            <a class="waves-effect waves-grey" href="{{ url('/admin/users') }}">
                                <i class="material-icons">person</i>Usuarios
                            </a>
                        </li>
                    @endif
                </ul>
                <div class="footer center-align">
                    <p class="copyright">Domtecno ©</p>
                </div>
                </div>
            </aside>
            <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title">
                            @yield('titulo','Reservas')
                        </div>
                    </div>
                    @yield('content')


                </div>
            </main>
        </div>
        <div class="left-sidebar-hover"></div>
        
        <script src="{{ asset('js/angular.min.js') }}"></script>
        <script src="{{ asset('js/ng-table.min.js') }}"></script>
        @yield('angular')
        <!-- Javascripts -->
        <script src="{{ asset('administrador') }}/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="{{ asset('js/materialize-new.js') }}"></script>
        <script src="{{ asset('administrador') }}/plugins/materialize/js/materialize.min.js"></script>
        <script src="{{ asset('administrador') }}/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="{{ asset('administrador') }}/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="{{ asset('administrador') }}/plugins/sweetalert/sweetalert.min.js"></script>
        <script src="{{ asset('administrador') }}/js/alpha.min.js"></script>
        @yield('js')
        
    </body>
</html>