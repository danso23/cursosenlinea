@extends('layouts.app')

{{-- @section('content')
    <!--start content-->
    <section class="hero">
        <div class="container">
            <div class="row justify-content-center mrl-q">
                <div class="col-md-2 col-lg-2 d-none d-sm-none d-md-block d-lg-block p-0 text-right content-category">
                </div>
                <div class="col-12 col-sm-12 col-md-10 col-lg-10 p-0">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('public/img/carousel/1.jpg') }}" alt="First slide" width="100%">
                                <div class="col-10 col-sm-10 col-md-5 col-lg-5 caption text-center">
                                    <button type="button" class="btn btn-primary btn-add">Añadir al carrito</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('public/img/carousel/1.jpg') }}" alt="First slide" width="100%">
                                <div class="col-10 col-sm-10 col-md-5 col-lg-5 caption text-center">
                                    <button type="button" class="btn btn-primary btn-add">Añadir al carrito</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('public/img/carousel/1.jpg') }}" alt="First slide" width="100%">
                                <div class="col-10 col-sm-10 col-md-5 col-lg-5 caption text-center">
                                    <button type="button" class="btn btn-primary btn-add">Añadir al carrito</button>
                                </div>
                            </div>
                            <div class="caption-controls">
                                <a class="arrow-up" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="" aria-hidden="true"></span>
                                    <img src="{{ asset('public/icons/flechaup.svg') }}" alt="">
                                </a>
                                <a class="arrow-down" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="" aria-hidden="true"></span>
                                    <img src="{{ asset('public/icons/flechadown.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-productos">
        <div class="container">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row justify-content-center">
                
            </div>
        </div>
    </section>
@endsection --}}