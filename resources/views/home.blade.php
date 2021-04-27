@extends('layouts.app')

@section('content')
    <!--start content-->
    <section class="hero">
        <div class="content-banner">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                  <div class="col-5 text-left">
                    <h1 class="font-weight-light">TODO LO QUE NECESITAS PARA SER UN TRADER EN UN SOLO LUGAR</h1>
                    <p class="lead">Conoce nuestras membresias y unete a nuestra plataforma.</p>
                    <button class="btn btn-green-df">Registrate</button>
                  </div>
                </div>
            </div>
        </div>
    </section>
{{-- 
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
    </section> --}}
@endsection