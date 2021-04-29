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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aspernatur, voluptas alias ipsam ea dolorem vel corporis quo ab dolor recusandae aliquid, similique impedit exercitationem repellat maiores quam, nesciunt sequi!</p>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2 content-why-choose-img">
                        <img src="{{ asset('img/Iconos/ayuda.svg') }}" class="img-why-choose">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae architecto ipsum delectus corrupti eveniet nemo, nisi velit id.</p>
                    </div>
                    <div class="col-2 content-why-choose-img">
                        <img src="{{ asset('img/Iconos/equipo.svg') }}" class="img-why-choose">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae architecto ipsum delectus corrupti eveniet nemo.</p>
                    </div>
                    <div class="col-2 content-why-choose-img">
                        <img src="{{ asset('img/Iconos/crecimiento.svg') }}" class="img-why-choose">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae.</p>
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
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat, modi natus. Rerum minus ea.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae repudiandae veniam atque, recusandae nihil quisquam sint! Ducimus, itaque? Quo tempora.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat, modi natus. Rerum minus ea.</p>
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
                                    <div class="col-4 type-description-membership">
                                        <h6>TRADER CFDS</h6>
                                    </div>
                                    <div class="col-8 text-center price-description-membership">
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
                    <div class="col-4">
                        <div class="card card-membership" style="width: 18rem;">
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
                    <div class="col-4">
                        <div class="card card-membership card-top" style="width: 18rem;">
                            <div class="card-header header-green">
                                <div class="row">
                                    <div class="col-4 type-description-membership">
                                        <h6>TRADER CFDS</h6>
                                    </div>
                                    <div class="col-8 text-center price-description-membership">
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
                    <div class="col-5"></div>
                </div>
            </div>
        </div>
    </section>
@endsection