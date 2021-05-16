@extends('layouts.app')

@section('content')
    <!--start content-->
    <section class="hero">
        <div class="content-banner">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                  <div class="col-6 text-left">
                    <h1>TODO LO QUE NECESITAS PARA SER UN TRADER EN UN SOLO LUGAR</h1>
                    <p class="lead">Conoce nuestras membresias y unete a nuestra plataforma.</p>
                    <a class="btn btn-green-df" href="{{ route('register') }}" >Registrate</a>
                  </div>
                </div>
            </div>
        </div>
        <div class="content-why-chooose container-home">
            <div class="h-100">
                <div class="row justify-content-center h-100">
                    <div class="col xl-5 col-lg-5 col-md-3 col-sm-9">
                        <h2>¿POR QUÉ ELEGIRNOS A <span>NOSOTROS</span>?</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aspernatur, voluptas alias ipsam ea dolorem vel corporis quo ab dolor recusandae aliquid, similique impedit exercitationem repellat maiores quam, nesciunt sequi!</p>
                    </div>
                    <div class="col-xl-1 col-lg-1 d-lg-block d-md-none"></div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-9 col-col-2 content-why-choose-img">
                        <img src="{{ asset('img/Iconos/ayuda.svg') }}" class="img-why-choose">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae architecto ipsum delectus corrupti eveniet nemo, nisi velit id.</p>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-9 col-col-2 content-why-choose-img">
                        <img src="{{ asset('img/Iconos/equipo.svg') }}" class="img-why-choose">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae architecto ipsum delectus corrupti eveniet nemo.</p>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-9 col-col-2 content-why-choose-img">
                        <img src="{{ asset('img/Iconos/crecimiento.svg') }}" class="img-why-choose">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-what-is container-home">
            <div class="h-100">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-10 col-10">
                        <img src="{{ asset('img/Imagenes/DF-porque.jpg') }}" alt="">
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 -col-sm-9 col-12 content-text-what-is">
                        <h2>¿QUÉ ES MINDS <span>O</span>VER MARKET?</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat, modi natus. Rerum minus ea.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae repudiandae veniam atque, recusandae nihil quisquam sint! Ducimus, itaque? Quo tempora.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat, modi natus. Rerum minus ea.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-membership">
            <div class="container-home h-100">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-9 col-10">
                        <div class="card card-membership card-top" style="width: 18rem;">
                            <div class="card-header header-green">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 type-description-membership">
                                        <h6>TRADER CFDS</h6>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12  text-center price-description-membership">
                                        <h3 class="price-membership"><span>$</span>349</h3>
                                        <p>CDFS, CFDS, CFDS y CFDS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body list-contain-membership justify-content-center">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center list-contain">
                                        <ul class="list-inline">
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                        </ul>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <a href="#" class="btn">Conoce más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-9 col-10">
                        <div class="card card-membership card-principal" style="width: 18rem;">
                            <div class="card-header header-purple">
                                <div class="row">
                                    <div class="col-12 text-center price-description-membership">
                                        <h6>INVERSIONISTA MAESTRO</h6>
                                        <h3 class="price-membership"><span>$</span>499</h3>
                                        <p>CDFS, CFDS, CFDS y CFDS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body list-contain-membership justify-content-center">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center list-contain">
                                        <ul class="list-inline">
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                        </ul>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <a href="#" class="btn">Conoce más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-9 col-10">
                        <div class="card card-membership card-top" style="width: 18rem;">
                            <div class="card-header header-green">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 type-description-membership">
                                        <h6>TRADER CFDS</h6>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 text-center price-description-membership">
                                        <h3 class="price-membership"><span>$</span>349</h3>
                                        <p>CDFS, CFDS, CFDS y CFDS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body list-contain-membership justify-content-center">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center list-contain">
                                        <ul class="list-inline">
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                            <li>Lorem ipsum dolor, sit amet.</li>
                                        </ul>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <a href="#" class="btn">Conoce más</a>
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
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7 col-md-6 col-sm-10 col-10 comment-title">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 col-sm-5 col-5">
                                <h2>¡NUESTROS MIEMBROS <span>O</span>PINAN!</h2>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-4 col-sm-5 col-5">
                                <img src="{{ asset('img/Imagenes/DF-cliente1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 d-none- d-sm-none d-md-none d-lg-block d-xl-block"></div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 col-10 comments-members">
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