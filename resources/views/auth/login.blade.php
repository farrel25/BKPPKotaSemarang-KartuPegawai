@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90">
            <span class="login100-form-title p-b-51">
                Login
            </span>

            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form flex-sb flex-w">
                @csrf

                <div class="wrap-input100 validate-input m-b-4" data-validate="username is required">
                    <input class="input100" type="text" id="username" name="username" placeholder="Username"
                        class="form-control @error('username') is-invalid  @enderror" value="{{ old('username') }}">
                    <span class="focus-input100"></span>
                </div>
                @error('username')
                <span class="font-italic text-danger mb-3" role="alert">
                    {{ $message }}
                </span>
                @enderror

                <div class="wrap-input100 validate-input m-b-16 m-t-12" data-validate="Password is required">
                    <input class="input100" id="password" type="password" name="password" placeholder="Password"
                        class="form-control @error('password') is-invalid @enderror" data-toggle="password">
                    <span class="focus-input100"></span>
                </div>
                @error('password')
                <span class="font-italic text-danger mb-3" role="alert">
                    {{ $message }}
                </span>
                @enderror

                <div class="flex-sb-m w-full p-t-3 p-b-24">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href="#" class="txt1">
                            Lupa password?
                        </a>
                    </div>
                </div>

                <div class="container-login100-form-btn m-t-17">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>

            <div class="row mt-4 mx-auto">
                <div class="col-12 text-center">
                    <a href="{{ route('register') }}">
                        Belum punya akun? daftar
                    </a>
                </div>
                <div class="col-12 mt-2 text-center">
                    <a href="{{ route('home') }}">
                        Kembali ke Beranda
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>
@endsection
