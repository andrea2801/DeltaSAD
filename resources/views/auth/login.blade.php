@extends('layouts.app')

@section('content')
    <div class="container login_body">
        <div class="row justify-content-center">

            <div class="col-12  col-md-6">
                <img class="logo col-auto" src="{{asset('img_login/Logo2.png')}} " alt="DeltaSAd">
            </div>
            <div class="col-12 col-md-6 login_form">
                <div class="card">


                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row dni_login">
                                <label for="dni" class="col-4 col-md-3 col-form-label text-md-right rect_mobil">{{ __('Dni') }}</label>

                                <div class="col-md-10">
                                    <input id="dni_input_login" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" required autocomplete="dni" autofocus>

                                    @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row password_login">
                                <label for="password" class="col-4 col-md-3 col-form-label text-md-right rect_mobil">{{ __('Password') }}</label>

                                <div class="col-md-10">
                                    <input id="password_input_login" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row remerberme">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-md-10">
                                    <button type="submit"  class="btn col-10 col-md-10 botton_general botton_login">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <a class="btn btn-link col-md-12 forgot_password" href="">
                                    {{ __('Forgot Your Password?') }}
                                </a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
    $(document).ready(function (){
        $("input").click(function (){
            $(this).css("background-color","red");
        });
    });

    </script>

@endsection
