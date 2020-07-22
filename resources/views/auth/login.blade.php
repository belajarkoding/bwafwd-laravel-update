@extends('layouts.app')

@section('content')
<div class="container d-none">
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

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
</div>
<main class="login-container">
      <div class="container">
        <div class="row page-login d-flex align-items-center">
          <div class="section-left col-12 col-md-6">
            <h1 class="mb-4">We explore the new <br />life much better</h1>
            <img
              src="/frontend/images/login-images.png"
              alt=""
              class="w-75 d-none d-sm-flex"
            />
          </div>
          <div class="section-right col-12 col-md-4">
            <div class="card">
              <div class="card-body">
                <div class="text-center">
                  <img
                    src="/frontend/images/logo.png"
                    alt=""
                    class="w-50 mb-4"
                  />
                </div>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input
                      type="email"
                      class="form-control @error('email') is-invalid @enderror" 
                      name="email" 
                      value="{{ old('email') }}"
                      id="exampleInputEmail1"
                      aria-describedby="emailHelp"
                      required 
                      autocomplete="email" 
                      autofocus
                    />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input
                      type="password"
                      class="form-control @error('password') is-invalid @enderror" 
                      name="password" 
                      required 
                      autocomplete="current-password"
                      id="exampleInputPassword1"
                    />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      name="remember" 
                      id="remember" {{ old('remember') ? 'checked' : '' }}
                    />
                    <label class="form-check-label" for="exampleCheck1"
                      >Remember Me</label
                    >
                  </div>
                  <button type="submit" class="btn btn-login btn-block">
                    Sign In
                  </button>
                  <a href="{{ route('register') }}" class="btn btn-default btn-block" style="background-color: #eee; text-decoration: none;">
                    Register
                  </a>
                  <p class="text-center mt-4">
                    <a href="{{ route('password.request') }}">Saya lupa password</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection
