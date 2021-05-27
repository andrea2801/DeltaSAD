@extends('layouts.app')
@section('content')
<section class="login d-flex align-items-center justify-content-center p-5">
    <div class="container-fluid login_body">
        <div class="row container-popup justify-content-center">
            <div class="col-12 col-md-7 popup p-3 ">
                <div class="row">
                    <div class="col-11">
                        <p>Porfavor pongase en contacto con su cordinador/a para restaurar sus credenciales. Grácias.</p>
                    </div>
                    <div class="col-1 close_login d-flex justify-content-end">
                        <img class="close-icon" src="{{asset('img/icons/X.png')}}" alt="Close">
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center">
                <img src="{{asset('img/Logo2.png')}}" alt="DeltaSAd">
            </div>
            <div class="col-12 col-md-6 login_form d-flex justify-content-center align-items-center mt-md-0 mt-5">
                    <form class="formulario" method="post" action="{{route('login')}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <div class="form-group dni_login">
                                <div class="row d-flex justify-content-center">
                                    <label class="col-8 rect_mobil dni_mov align-items-center d-flex" for="dni">{{ __('Dni') }}</label>
                                    <input id="dni_input_login" type="text" class="col-8 form-control @error('dni') is-invalid @enderror" name="dni" required autocomplete="dni" autofocus>
                                        @error('dni')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-group row password_login d-flex justify-content-center">
                                <label class="col-8 rect_mobil pass_mov align-items-center d-flex" for="password">{{ __('Password') }}</label>
                                <input id="password_input_login" type="password" class="col-8 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                            <div class="form-group row remerberme d-flex justify-content-center">
                                <div class="col-8 form-check ml-5 text-right">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="row row d-flex justify-content-center">
                                <div class="col-9 justify-content-center d-flex">
                                    <button type="submit" class="btn botton_general botton_login">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <a class="btn btn-link col-12 forgot_password">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>
@endsection
