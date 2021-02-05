@extends('layouts.app')

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
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

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
                    name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm"
                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
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
<div class="bg-masuk-daftar">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90 bg-glass">
                <span class="login100-form-title p-b-30 p-t-30">
                    {{ __('Daftar') }}
                </span>

                <form method="POST" action="{{ route('register') }}" class="login100-form validate-form flex-sb flex-w">
                    @csrf

                    <div class="wrap-input100 validate-input" data-validate="nip is required">
                        <input class="input100" type="text" id="nip" name="nip" placeholder="NIP"
                            class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip') }}">
                        <span class="focus-input100"></span>
                    </div>
                    @error('nip')
                    <span class="font-italic text-danger mb-2" role="alert">
                        <small>{{ $message }}</small>
                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input m-t-4" data-validate="full_name is required">
                        <input class="input100" type="text" id="full_name" name="full_name" placeholder="Nama Lengkap"
                            class="form-control @error('full_name') is-invalid @enderror"
                            value="{{ old('full_name') }}">
                        <span class="focus-input100"></span>
                    </div>
                    @error('full_name')
                    <span class="font-italic text-danger mb-2" role="alert">
                        <small>{{ $message }}</small>
                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input m-t-4" data-validate="username is required">
                        <input class="input100" type="text" id="username" name="username" placeholder="Username"
                            class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}">
                        <span class="focus-input100"></span>
                    </div>
                    @error('username')
                    <span class="font-italic text-danger mb-2" role="alert">
                        <small>{{ $message }}</small>
                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input m-t-4" data-validate="Email is required">
                        <input class="input100" type="text" id="email" name="email" placeholder="Email"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        <span class="focus-input100"></span>
                    </div>
                    @error('email')
                    <span class="font-italic text-danger " role="alert">
                        <small>{{ $message }}</small>
                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input m-t-4" data-validate="Password is required">
                        <input class="input100" id="password" type="password" name="password" placeholder="Password"
                            class="form-control @error('password') is-invalid @enderror" data-toggle="password">
                        <span class="focus-input100"></span>
                    </div>
                    @error('password')
                    <span class="font-italic text-danger mb-2" role="alert">
                        <small>{{ $message }}</small>
                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input m-t-4" data-validate="Confirmation is required">
                        <input class="input100" id="password-confirm" type="password" name="password_confirmation"
                            placeholder="Konfirmasi Password" class="form-control" data-toggle="password">
                        <span class="focus-input100"></span>
                    </div>

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
                            {{ __('Daftar') }}
                        </button>
                    </div>
                </form>

                <div class="row mt-4 mx-auto">
                    <div class="col-12 text-center">
                        <a href="{{ route('login') }}">
                            Sudah punya akun? masuk
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
</div>
<div id="dropDownSelect1"></div>

@endsection
