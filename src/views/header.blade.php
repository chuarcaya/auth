<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>LINDI - Regalos que los dicen todo.</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="google-site-verification" content="plBTyhsDE0VZ3wXLe5ef3RGNBeZsoW2FFE5sb_b3B_4" />
    <meta name="description" content="En Lindi encuentras regalos que puedes personalizar y que transmiten todo lo que tu quieres transmitir. En la tienda de Lindi, encuentra tazas, polos, cases de celulares y mucho más.">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}"/>
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Montserrat:400,700|Arimo:400,700|Playfair+Display:700,400italic&#038;subset=latin%2Clatin-ext' type='text/css'/>
</head>
<body class="page page-id-7498 page-template-default masthead-fixed singular wpb-js-composer js-comp-ver-4.12 vc_responsive">
<div class="row">
<div id="menu-responsive" class="pbr-page-inner row-offcanvas row-offcanvas-left">
<div class="topbar-mobile  hidden-lg hidden-md">
    <div class="active-mobile pull-left">
        <button id="active-menu" data-toggle="offcanvas" class="btn btn-offcanvas btn-toggle-canvas offcanvas" type="button">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="topbar-inner pull-right">
        <div class="active-mobile setting-popup pull-left">
            <i class="fa fa-angle-down"></i>
            <div class="active-content">
                <div class="pull-right">
                    <div class="menu-acount-container">
                        <ul id="menu-acount" class="menu-topbar">
                            <li class="menu-item">
                                <a href="{{ url('/nosotros') }}">Nosotros</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('/map') }}">Nuestra Tienda</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('/novedades') }}">Novedades</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="active-mobile setting-popup pull-left">
            <i class="fa fa-user"></i>
            <div class="active-content">
                <div class="pull-right">
                    <div class="menu-acount-container">
                        <ul id="menu-acount" class="menu-topbar">
                            <li class="menu-item">
                                <a href="{{ url('/auth/login') }}">Iniciar Sesión</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('/auth/register') }}">Registrarse</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="active-mobile pull-left cart-popup">
            <i class="fa fa-shopping-cart"></i>
        </div> 
    </div> 
</div>
<header class="site-header pbr-header-market-v3" role="banner">
<div class="container">
<div class="container-inner has-sticky">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 header-main row">
        <div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 logo-wrapper nospace">
            <div class="logo-container margin-top-20">
                <a href="{{ url('') }}">
                    <img alt="Lindi" src="{{ asset('img/logo.svg') }}">
                </a>
            </div>
        </div>
        <div class="col-lg-10 col-md-10 col-xs-12 col-sm-12 megamenu-wrapper margin-top-20 top-main nospace" style="padding-top: 10px;padding-bottom: 10px;">
            <div class="row-fluid">
                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12 inner">
                    <div class="hidden-xs hidden-sm">
                        <nav class="pbr-topmenu">
                            <div class="menu-acount-container">
                                <ul id="main-topmenu" class="pbr-menu-top list-inline">
                                    <li class="menu-item"><a href="{{ url('/nosotros') }}">Nosotros</a></li>
                                    <li class="menu-item"><a href="{{ url('/mapa') }}">Nuestra Tienda</a></li>
                                    <li class="menu-item"><a href="{{ url('/novedades') }}">Novedades</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 text-right nospace hidden-sm hidden-xs">
                    <span class="icon-header"><i class="fa fa-user"></i></span>
                    @if ($data == null)
                    <a href="{{ url('/auth/login') }}">Iniciar Sesión</a> | <a href="{{ url('/auth/register') }}">Registrate</a>
                    @else
                    Hola
                    <a class="active" href="{{ url('/auth/request') }}">{{ $data->firstname }}</a> |
                    <a class="active" href="{{ url('/auth/logout') }}">Cerrar Sesión</a>
                    @endif
                </div>
            </div>
            <div class="row-fluid">
                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12 inner  ">
                    <form class="custom-form" method="post" action="{ url('/catalogo/prev') }}">
                        <div class="input-group">
                            <input type="text" name="title" class="form-control" placeholder="Buscar..." >
                            <span class="input-group-btn">
                                <button class="btn btn-secondary btn-search" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                            <input type="hidden" name="prev" value="prev">
                       </div>
                   </form>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 text-right nospace hidden-sm hidden-xs">
                    <div id="cart" class="dropdown version-1 box-top">
                        <a class="dropdown-togglex mini-cart box-wrap " data-toggle="dropdown" aria-expanded="true" role="button" aria-haspopup="true" data-delay="10" href="#" title="View your shopping cart">
                            <span class="icon-header"><i class="fa fa-shopping-cart"></i></span>Carrito
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</header>