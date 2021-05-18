@extends('layouts.template_register')

@section('content')
{{--<div class="container">
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
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('last_name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                
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
</div>--}} 
<div class="container content-register">
    <div class="row h-100">
        <div class="col-6 content-register-left">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('public/img/Imagenes/DF-registro001.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="col-6 content-register-right align-self-center text-center">
            <div class="col-9">
                <h2>REGISTRATE</h2>
                <p>Únete a nuestra plataforma.</p>
                {{--<form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control custom-input" placeholder="Nombre(s)" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control custom-input" placeholder="Apellido paterno" name="lastname" id="lastname">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control custom-input" placeholder="Apellido materno" name="lastname2" id="lastname2">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control custom-input" placeholder="Correo electrónico o nombre de usuario" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control custom-input" placeholder="Fecha de nacimiento" name="date_of_birth" id="date_of_birth">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control custom-input" placeholder="Número celular" name="phone" id="phone">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control custom-input" placeholder="País" name="country" id="country">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control custom-input" placeholder="Estado" name="state" id="state">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control custom-input" placeholder="Código Postal" name="zip_code" id="zip_code">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control custom-input" placeholder="Contraseña" name="password" id="password">
                    </div>
                    <button class="btn btn-green-df pull-left">Registrate</button>
                    <!-- <button class="btn btn-purple-df pull-right">Inicia sesión</button> -->
                    
                    <div class="form-check content-acept-terms">
                        <input type="checkbox" class="form-check-input" id="acept-terms">
                        <label class="form-check-label acept-terms" for="acept-terms">Acepto los <span>Terminos</span>, <span>Condiciones</span> y <span>Politicas de MOM</span></label>
                    </div>
                </form>--}}
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="Apellido Paterno">
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="last_name2" type="text" class="form-control @error('last_name2') is-invalid @enderror" name="last_name2" value="{{ old('last_name2') }}" required autocomplete="last_name2" autofocus placeholder="Apellido Materno">
                                @error('last_name2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="date_of_birth" type="text" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus placeholder="Fecha de nacimiento">
                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Celular">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus placeholder="País">
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required autocomplete="state" autofocus placeholder="Estado">
                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="zip_code" type="text" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" value="{{ old('zip_code') }}" required autocomplete="zip_code" autofocus placeholder="Código Postal">
                                @error('zip_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <div class="col-md-6">
                                <input id="ine" type="text" class="form-control @error('ine') is-invalid @enderror" name="ine" value="{{ old('ine') }}" required autocomplete="ine" autofocus placeholder="Fecha de nacimiento">
                                @error('ine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div> -->

                        <!-- <div class="form-group row">
                            <div class="col-md-6">
                                <input id="proof_of_address" type="text" class="form-control @error('proof_of_address') is-invalid @enderror" name="proof_of_address" value="{{ old('proof_of_address') }}" required autocomplete="proof_of_address" autofocus placeholder="Comprobante domiciliario">
                                @error('proof_of_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div> -->

                        <!-- <div class="form-group row">
                            <div class="col-md-6">
                                <input id="rfc" type="text" class="form-control @error('rfc') is-invalid @enderror" name="rfc" value="{{ old('rfc') }}" required autocomplete="rfc" autofocus placeholder="RFC">
                                @error('rfc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div> -->

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Contraseña">
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
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
