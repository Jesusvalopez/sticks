@extends('layouts.main')

@section('content')

    <div id="page">
        <nav class="sticks-nav" role="navigation">
            <div class="sticks-container">
                <div class="row">
                    <div class="col-sm-2 col-xs-12">
                        <div id="sticks-logo"><img src="/images/logo-sticks-mejorado.png" alt="sticks-logo"></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1 main-nav">
                        <ul>
                            <li class="active"><a href="#home" data-nav-section="home">Inicio</a></li>
                            <li><a href="#menu" data-nav-section="menu">Menú</a></li>

                            <li><a href="#order" data-nav-section="order">Cómo Ordenar</a></li>
                            <li><a href="#contact" data-nav-section="contact">Contact</a></li>
                            @guest
                            <li>
                                <a class="external" href="{{ route('login') }}">Iniciar Sesión</a>
                            </li>
                            <li class="">
                                <a class="external" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            </li>
                            @else
                                <li class="dropdown">
                                    <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ ucfirst(Auth::user()->name) }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesión
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <div id="home" class="js-fullheight"  data-section="home">
            <div class="flexslider js-fullheight">
                <ul class="slides">
                    <li style="background-image: url(images/img_bg_1.jpg);">

                        <img src="/images/slider/sticks-1.jpg" alt="">

                    </li>
                    <li style="background-image: url(images/img_bg_2.jpg);">
                        <img src="/images/slider/sticks-2.jpg" alt="">

                    </li>
                    <li style="background-image: url(images/img_bg_3.jpg);">
                        <img src="/images/slider/sticks-3.jpg" alt="">
                    </li>
                </ul>
            </div>
        </div>

        <div class="sticks-section-overflow">

            <div class="sticks-section" id="menu" data-section="menu">
                <div class="sticks-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="sticks-heading">
                                <h2 class="sticks-left">Menú</h2>
                                <p>Descripcion del producto</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">


                        <div class="sticks-container">

                            <div class="row">
                                <div class="col-md-4">
                                    <a href="#" class="sticks-card-item has-text">
                                        <figure>
                                            <div class="overlay"><i class="ti-plus"></i></div>

                                        </figure>
                                        <div class="sticks-text text-left">
                                            <h2>Queso crema + Tocino</h2>
                                            <img class="sticks-image" src="/images/products/sticks-1.jpg" alt="">
                                            <p class="sticks-category">$3.490</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a href="#" class="sticks-card-item has-text">
                                        <figure>
                                            <div class="overlay"><i class="ti-plus"></i></div>

                                        </figure>
                                        <div class="sticks-text text-left">
                                            <h2>Chocolate Blanco</h2>
                                            <img class="sticks-image" src="/images/products/sticks-2.jpg" alt="">
                                            <p class="sticks-category">$3.690</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix visible-sm-block"></div>
                                <div class="col-md-4">
                                    <a href="#" class="sticks-card-item has-text">
                                        <figure>
                                            <div class="overlay"><i class="ti-plus"></i></div>

                                        </figure>
                                        <div class="sticks-text text-left">
                                            <h2>Queso Blanco</h2>
                                            <img class="sticks-image" src="/images/products/sticks-3.jpg" alt="">
                                            <p class="sticks-category">$2.990</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix visible-lg-block visible-md-block"></div>

                                <div class="col-md-4">
                                    <a href="#" class="sticks-card-item has-text">
                                        <figure>
                                            <div class="overlay"><i class="ti-plus"></i></div>

                                        </figure>
                                        <div class="sticks-text text-left">
                                            <h2>Chocolate</h2>
                                            <img class="sticks-image" src="/images/products/sticks-4.jpg" alt="">
                                            <p class="sticks-category">$3.690</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix visible-sm-block"></div>

                                <div class="col-md-4">
                                    <a href="#" class="sticks-card-item has-text">
                                        <figure>
                                            <div class="overlay"><i class="ti-plus"></i></div>

                                        </figure>
                                        <div class="sticks-text text-left">
                                            <h2>Guayaba con Queso</h2>
                                            <img class="sticks-image" src="/images/products/sticks-5.jpg" alt="">
                                            <p class="sticks-category">$3.490</p>
                                        </div>
                                    </a>
                                </div>


                                <div class="clearfix visible-lg-block visible-md-block"></div>
                                <div class="clearfix visible-sm-block"></div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>




        </div>
        <div class="">
            <div id="order" class="sticks-section" data-section="order">
            <div class="sticks-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center sticks-heading">
                        <h2>Cómo ordenar</h2>
                        <p>Solamente sigue estos sencillos pasos</p>
                    </div>
                </div>
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Paso 1">
                            <span class="round-tab">
                                <i class="icon-phone"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Paso 2">
                            <span class="round-tab">
                              <i class="icon-map"></i>
                            </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Paso 3">
                            <span class="round-tab">
                               <i class="icon-credit-card"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="¡Listo!">
                            <span class="round-tab">
                                <i class="icon-check"></i>
                            </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form role="form">
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <h3>Paso 1</h3>
                                <p>Llámanos o escríbenos al +56 9 4234 4221</p>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2">
                                <h3>Paso 2</h3>
                                <p>Indícanos tu dirección y lo que deseas ordenar</p>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
                                    <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step3">
                                <h3>Paso 3</h3>
                                <p>Indícanos el método de pago</p>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
                                    <li><button type="button" class="btn btn-primary btn-info-full next-step">Siguiente</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="complete">
                                <h3>¡Listo!</h3>
                                <p>Tú pedido se estará pronto en la puerta de tu casa</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

        <div class="sticks-section-overflow">
            <div id="sticks-counter" class="sticks-section">
                <div class="sticks-container">

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center sticks-heading">
                            <h2>Fun Facts</h2>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="feature-center">
							<span class="icon">
								<i class="ti-download"></i>
							</span>
                                <span class="counter js-counter" data-from="0" data-to="2122070" data-speed="5000" data-refresh-interval="50">1</span>
                                <span class="counter-label">Downloads</span>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="feature-center">
							<span class="icon">
								<i class="ti-face-smile"></i>
							</span>
                                <span class="counter js-counter" data-from="0" data-to="402002" data-speed="5000" data-refresh-interval="50">1</span>
                                <span class="counter-label">Happy Clients</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="feature-center">
							<span class="icon">
								<i class="ti-briefcase"></i>
							</span>
                                <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
                                <span class="counter-label">Projects Done</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="feature-center">
							<span class="icon">
								<i class="ti-time"></i>
							</span>
                                <span class="counter js-counter" data-from="0" data-to="212023" data-speed="5000" data-refresh-interval="50">1</span>
                                <span class="counter-label">Hours Spent</span>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="sticks-products" data-section="products">
                <div class="sticks-container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center sticks-heading">
                            <h2>Products</h2>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="owl-carousel owl-carousel-carousel">
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>




        <div id="contact" data-section="contact" class="sticks-cover sticks-cover-xs" style="background-image:url(images/background-1.png);">
            <div class="overlay"></div>
            <div class="sticks-container">
                <div class="row text-center">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="col-md-12">
                                <h3 class="contact-text">Puedes contactarnos a través del correo {{'hola@stickschile.com'}}</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer id="sticks-footer" role="contentinfo">
            <div class="sticks-container">

                <div class="row copyright">
                    <div class="col-md-12">
                        <p class="pull-left">
                            <small class="block">&copy; {{date('Y')}} Sticks. Todos los derechos reservados.</small>
                            <small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">Sticks</a></small>
                        </p>
                        <p class="pull-right">
                        <ul class="sticks-social-icons pull-right">
                            <li><a href="https://www.instagram.com/stickschile" target="_blank"><i class="icon-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/stickschile" target="_blank"><i class="icon-facebook"></i></a></li>

                        </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    @endsection