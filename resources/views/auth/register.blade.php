@extends('layouts.template_register')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container content-register">
    <div class="row h-100">
        <div class="col-6 content-register-left">
            <div class="col-1"></div>
            <div class="col-11">
                <img src="{{ asset('img/Imagenes/DF-register.jpg') }}" alt="">
            </div>
        </div>
        <div class="col-6 content-register-right align-self-center text-center">
            <div class="col-9">
                <h1>REGISTRATE</h1>
                <p>Únete a nuestra plataforma.</p>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Correo electrónico o nombre de usuario">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Contraseña">
                    </div>
                    <button class="btn-primary pull-left">Download</button>
                    <button class="btn-danger pull-right">Mirror</button>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Acepto los <span>Terminos</span>, <span>Condiciones</span> y <span>Politicas de MOM</span></label>
                    </div>
                </form>
                <div class="row py-4 d-flex align-items-center socials-medias">
                    <div class="col-12 text-center">
                      <a class="fb-ic">
                        <i class="fab fa-whatsapp mr-4"> </i>
                      </a>
                      <a class="ins-ic">
                        <i class="fab fa-instagram mr-4"> </i>
                      </a>
                      <a class="fb-ic">
                        <i class="fab fa-facebook-f mr-4"> </i>
                      </a>
                      <a class="tw-ic">
                        <i class="fab fa-twitter mr-4"> </i>
                      </a>
                    </div>           
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>
@endsection
