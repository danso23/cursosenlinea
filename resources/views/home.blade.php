@extends('layouts.app')

@section('content')
    <!--start content-->
    <section class="hero">
        <div class="content-banner">
            <div class="info-nav">
                <div class="container">
                    <div class="d-flex justify-content-between bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <a href="{{ asset('/')}}" class="logo">
                                <img src="{{ asset('/img/Logotipo/DF-logotipoheader.svg') }}" class="logo-black" alt="">
                                <!-- <img src="img/logo.png" class="logo-white" alt=""> -->
                            </a>
                        </div>
                        <div class="p-2 bd-highlight">
                            <ul class="menu-center">
                                <li>
                                    <form action="" class="form-inline">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <div class="input-group-text bg-transparent"><i class="fa fa-search"></i></div>
                                            </span>
                                            <input class="form-control py-2 border-right-0 border" type="search" id="example-search-input">
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="p-2 bd-highlight">
                            <ul class="menu-right">
                                <!-- <li class="menu-m">
                                    <button class="navbar-toggler toggler-example toggle-menu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="text-white">
                                            <i class="fas fa-bars fa-1x"></i>
                                        </span>
                                    </button>
                                </li> -->
                                <li>
                                    @if (Auth::guest())
                                        <a class="btn" style="font-family: revert;font-size: 14px;" href="{{ url('/login') }}"> Iniciar sesión </a>
                                    @else
                                        <a class="btn" style="font-family: revert;font-size: 14px;" href="{{ url('/logout') }}"> Cerrar Sesión </a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                  <div class="col-6 text-left">
                    <h1>TODO LO QUE NECESITAS PARA SER UN TRADER EN UN SOLO LUGAR</h1>
                    <p class="lead">Conoce nuestras membresias y unete a nuestra plataforma.</p>
                    <button class="btn btn-green-df">Registrate</button>
                  </div>
                </div>
            </div>
        </div>
        <div class="content-why-chooose container-home">
            <div class="h-100">
                <div class="row h-100">
                    <div class="col-5">
                        <h2>¿POR QUÉ ELEGIRNOS A <span>NOSOTROS</span>?</h2>
                        <p>Nos enfocamos en formar traders profesionales – Contamos con las herramientas específicas para tu crecimiento- La eficiencia de tu aprendizaje es nuestra prioridad- Reducimos la curva de aprendizaje un 50%. Hemos contribuido en el desarrollo de traders financiados, gestores de cuentas y fondos de inversión profesionales.</p>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2 content-why-choose-img">
                        <img src="{{ asset('img/Iconos/ayuda.svg') }}" class="img-why-choose">
                        <p>Somos traders y educadores profesionales en mercados de futuros, cfds, cryptos y tecnología blockchain.</p>
                    </div>
                    <div class="col-2 content-why-choose-img">
                        <img src="{{ asset('img/Iconos/equipo.svg') }}" class="img-why-choose">
                        <p>Sesiones en vivo toda la semana.</p>
                    </div>
                    <div class="col-2 content-why-choose-img">
                        <img src="{{ asset('img/Iconos/crecimiento.svg') }}" class="img-why-choose">
                        <p>Reducimos la curva de aprendizaje un 50%. Hemos contribuido en el desarrollo de traders financiados, gestores de cuentas y fondos de inversión profesionales.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-what-is container-home">
            <div class="h-100">
                <div class="row">
                    <div class="col-5">
                        <img src="{{ asset('img/Imagenes/DF-porque.jpg') }}" alt="">
                    </div>
                    <div class="col-7 content-text-what-is">
                        <h2>¿QUÉ ES MINDS <span>O</span>VER MARKET?</h2>
                        <p>Somos una escuela de trading e inversiones fundada en el 2018, contamos con educadores profesionales para guiarte en el desarrollo de tu carrera como trader, nuestros servicios están estratégicamente planeados para brindarte educación y experiencia que te llevaran hacia la consistencia a largo plazo. Nuestro propósito es formar mentes profesionales del trading.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-membership">
            <div class="container-home h-100">
                <div class="row">
                    <div class="col-4">
                        <div class="card card-membership card-top" style="width: 18rem;">
                            <div class="card-header header-green">
                                <div class="row">
                                    <div class="col-12 text-center type-description-membership text-center">
                                        <h6>MEMBRESÍA MENSUAL</h6>
                                    </div>
                                    <div class="col-12 text-center price-description-membership">
                                        <h3 class="price-membership"><span>USD </span>50</h3>
                                        <p>MES</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body list-contain-membership justify-content-center">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center list-contain">
                                        <ul class="list-inline">
                                            <li>Trading en Vivo</li>
                                            <li>Trading Academy</li>
                                            <li>WeProfit</li>
                                            <li>Criptoanálisis</li>
                                            <li>Podcast (Markets)</li>
                                            <li>Mindset</li>
                                            <li>Grupos de Telegram</li>
                                        </ul>
                                    </div>
                                    <div class="col-12 text-center">
                                        <p class="fuente">Inscripción 10 usd pago único</p>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <a href="{{url('productos')}}" class="btn">Conoce más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card card-membership card-principal" style="width: 18rem;">
                            <div class="card-header header-purple">
                                <div class="row">
                                    <div class="col-12 text-center price-description-membership">
                                        <h6>MEMBRESÍA SEMESTRAL</h6>
                                        <h3 class="price-membership"><span>USD </span>499</h3>
                                        <p>6 MESES</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body list-contain-membership justify-content-center">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center list-contain">
                                        <ul class="list-inline">
                                        <li>Trading en Vivo</li>
                                            <li>Trading Academy</li>
                                            <li>WeProfit</li>
                                            <li>Criptoanálisis</li>
                                            <li>Podcast (Markets)</li>
                                            <li>Mindset</li>
                                            <li>Grupos de Telegram</li>
                                        </ul>
                                    </div>
                                    <div class="col-12 text-center">
                                        <p class="fuente">Inscripción 10 usd pago único</p>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <a href="{{url('productos')}}" class="btn">Conoce más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card card-membership card-top" style="width: 18rem;">
                            <div class="card-header header-green">
                                <div class="row">
                                    <div class="col-12 text-center type-description-membership">
                                        <h6>ANUALIDAD</h6>
                                    </div>
                                    <div class="col-12 text-center price-description-membership">
                                        <h3 class="price-membership"><span>USD </span>500</h3>
                                        <p>(TE AHORRAS 2 MEMBRESÍAS)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body list-contain-membership justify-content-center">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center list-contain">
                                        <ul class="list-inline">
                                        <li>Trading en Vivo</li>
                                            <li>Trading Academy</li>
                                            <li>WeProfit</li>
                                            <li>Criptoanálisis</li>
                                            <li>Podcast (Markets)</li>
                                            <li>Mindset</li>
                                            <li>Grupos de Telegram</li>
                                        </ul>
                                    </div>
                                    <div class="col-12 text-center">
                                        <p class="fuente">Inscripción 10 usd pago único</p>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <a href="{{url('productos')}}" class="btn">Conoce más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-comments-members container-home">
            <div class="h-100">
                <div class="row">
                    <div class="col-7 comment-title">
                        <div class="row">
                            <div class="col-5">
                                <h2>¡NUESTROS MIEMBROS <span>O</span>PINAN!</h2>
                            </div>
                            <div class="col-7">
                                <img src="{{ asset('img/Imagenes/DF-cliente1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-4 comments-members">
                        <div class="carousel slide" data-ride="carousel">
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                                <li data-target="#demo" data-slide-to="3"></li>
                            </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h6>DANIEL PEÑA</h6>
                                    <ul class="list-inline star-rating">
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis sed quibusdam saepe exercitationem expedita ratione, nemo deserunt omnis aut numquam.</p>
                                </div>
                                <div class="carousel-item">
                                    <h6>DANIEL PEÑA</h6>
                                    <ul class="list-inline star-rating">
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis sed quibusdam saepe exercitationem expedita ratione, nemo deserunt omnis aut numquam.</p>
                                </div>
                                <div class="carousel-item">
                                    <h6>DANIEL PEÑA</h6>
                                    <ul class="list-inline star-rating">
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis sed quibusdam saepe exercitationem expedita ratione, nemo deserunt omnis aut numquam.</p>
                                </div>
                                <div class="carousel-item">
                                    <h6>DANIEL PEÑA</h6>
                                    <ul class="list-inline star-rating">
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis sed quibusdam saepe exercitationem expedita ratione, nemo deserunt omnis aut numquam.</p>
                                </div>
                            </div>
                            {{-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection