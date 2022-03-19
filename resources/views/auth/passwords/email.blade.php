@extends('layouts.app')

@section('content')
    <section class="vh-100" style="background: rgb(218,32,23);
        background: linear-gradient(0deg, rgba(218,32,23,1) 0%, rgba(151,150,148,1) 100%);">
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
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <div class="d-flex align-items-center justify-content-center mb-3 pb-1">
                                            <img src="{{ asset('/img/logo.png') }}" alt="" height="60px">
                                            {{-- <span class="h1 fw-bold mb-0"></span> --}}
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">{{ __('Reset Password') }}
                                        </h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="email"
                                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                required value="{{ old('email') }}" autofocus />
                                            <label class="form-label" for="email">{{ __('E-Mail Address') }}</label>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block">{{ __('Send Password Reset Link') }}</button>
                                        </div>

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
