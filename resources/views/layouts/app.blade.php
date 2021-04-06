<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="{{ asset('public/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('public/img/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="{{ asset('public/js/all.js') }}" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="{{ asset('public/css/font-family.css') }}" rel="stylesheet" /><!-- Merriweather-->
    <link href="{{ asset('public/css/font-family2.css') }}" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="{{ asset('public/css/magnific-popup.min.css') }}" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet" />
    <!-- AOS ANIMATION -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/animation_aos/aos.css') }}">
</head>
<body>
    <div id="app">
       <!-- HEADER -->
        <div class="col-12 text-center barra-top m-0">
            <h3>Descuentos hasta un 30% <br class="d-block d-sm-block d-md-none d-lg-none"><span>Consultas las bases <a href="#">aquí</a> </span></h3>
        </div>
        <div class="container info-nav">
            <div class="row mrl-q">
                <header id="site-header">
                    <a href="{{ asset('/')}}" class="logo">
                        <img src="{{ asset('public/img/logo.png') }}" class="logo-black" alt="">
                        <!-- <img src="img/logo.png" class="logo-white" alt=""> -->
                    </a>
                    <ul class="menu-right m-0">
                        <li>
                            <a href="#" class="icon-search" data-toggle="modal" data-target="#exampleModal"><img src="{{ asset('public/icons/busqueda.svg') }}" alt="Busqueda"></a>
                        </li>
                        <li>
                            @if (count(Cart::getContent()))
                                <a href="{{ route('cart.checkout') }}" class="icon-shopping"><img src="{{ asset('public/icons/carrito.svg') }}" alt="Carrito"><span class="badge badge-danger">{{count(Cart::getContent())}}</span></a>
                            @else
                                <a href="{{ route('cart.checkout') }}" class="icon-shopping"><img src="{{ asset('public/icons/carrito.svg') }}" alt="Carrito"></a>
                            @endif
                        </li>
                        <li class="menu-m">
                            <button type="button" class="toggle-menu btn-primary">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </li>
                    </ul>
                    
                    
                </header>
            </div>    
        </div>   
        @include('layouts.template_navbar_responsive')
        <!-- END HEADER -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header p-0">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text icon-search" id="basic-addon1"><i class="fas fa-search fa-rotate-90"></i></span>
                            </div>
                            <input type="text" class="form-control form-search" placeholder="" aria-label="Username" aria-describedby="basic-addon1" id="txtSearch">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main class="py-4" data-aos="fade-in">
            @yield('content')
        </main>
        <!--footer-->
        <footer class="site-footer">
            <div class="container p-0 content-f1">
                <div class="row mrl-q">
                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center text.sm-center text-md-left text-lg-left content-social-networks">
                        <h3>Siguenos</h3>
                        <ul>
                            <li>
                                <a href="#"><img src="{{ asset('public/icons/iconofacebook.svg') }}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('public/icons/iconoinstagram.svg') }}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 text-center text.sm-center text-md-left text-lg-left content-pay">
                    <h3>Formas de Pago</h3>
                        <ul>
                            <li>
                                <a href="#"><img src="{{ asset('public/icons/iconopaypal.svg') }}" alt="PayPal"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('public/icons/iconomastercard.svg') }}" alt="MasterCard"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('public/icons/iconovisa.svg') }}" alt="Visa"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-7 text-center text.sm-center text-md-right text-lg-right content-footer-logo">
                        <a href=""><img src="{{ asset('public/img/logo.png') }}" alt="index.php"></a>
                        <div class="row justify-content-end">
                            <div class="col-md-11 col-lg-6">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur vero, voluptatum, quia, illum animi quam exercitationem voluptates veniam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center copyright">
                <ul class="m-0">
                    <li>&copy; 2021 Desarrollo por...</li>
                    <li class="br-copy link-copy"><a href="#">Políticas de privacidad</a></li>
                    <li class="link-copy"><a href="#">Términos y Condiciones</a></li>
                </ul>
            </div>
        </footer>
        <!--end footer-->
        <!-- Bootstrap core JS-->
        <script src="{{ asset('public/js/jquery-3.5.1.js') }}"></script>
        <script src="{{ asset('public/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Third party plugin JS-->
        <script src="{{ asset('public/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery.magnific-popup.min.js')}}"></script>
        <script type='text/javascript' src="{{ asset('public/js/main.js') }}"></script>
        <script src="{{ asset('public/js/wow.min.js') }}"></script>
        <!-- Core theme JS-->
        <!-- <script src="{{ asset('public/js/scripts.js') }}"></script> -->
        <!-- AOS ANIMATION -->
        <script type="text/javascript" src="{{ asset('public/animation_aos/aos.js') }}"></script>
        <!-- INIT AOS -->
        <script type="text/javascript" src="{{ asset('public/js/animation.js') }}"></script>
    </div>
    </section> 
</body>
</html>
