@extends('layouts.app')

@section('content')
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ asset('img/Login.png') }}" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="d-flex align-items-center justify-content-center mb-3 pb-1">
                                            <img src="{{ asset('/img/logo.png') }}" alt="" height="60px">
                                            {{-- <span class="h1 fw-bold mb-0"></span> --}}
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">{{ __('Login') }}
                                        </h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="email"
                                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                required value="{{ old('email') }}" />
                                            <label class="form-label" for="email">{{ __('E-Mail Address') }}</label>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="password"
                                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                required autocomplete="current-password" />
                                            <label class="form-label" for="password">{{ __('Password') }}</label>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block">{{ __('Login') }}</button>
                                        </div>

                                        <a class="small text-muted"
                                            href="{{ __('Login') }}">{{ __('Forgot Your Password?') }}</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
