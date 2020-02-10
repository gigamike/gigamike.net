@extends('layouts.app')

@section('title', 'Login')

@section('content')
<!-- Login Form -->
    <div class="container space-2">
      <form method="POST" action="{{ route('login') }}" class="js-validate w-md-75 w-lg-50 mx-md-auto">
        @csrf
        <!-- Title -->
        <div class="mb-7">
          <h2 class="h3 text-primary font-weight-normal mb-0">Welcome <span class="font-weight-semi-bold">back</span></h2>
          <p>Login to manage your account.</p>
        </div>
        <!-- End Title -->

        <!-- Form Group -->
        <div class="js-form-message form-group">
          <label class="form-label" for="signinSrEmail">{{ __('Email address') }}</label>
          <input type="email" class="form-control" name="email" id="signinSrEmail" placeholder="Email address" aria-label="Email address" required
                 data-msg="Please enter a valid email address."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success"
                 autocomplete="email"
                value="{{ old('email') }}"
                  autofocus>

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="js-form-message form-group">
          <label class="form-label" for="signinSrPassword">
            <span class="d-flex justify-content-between align-items-center">
              {{ __('Password') }}
              @if (Route::has('password.request'))
              <a class="link-muted text-capitalize font-weight-normal" href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
              @endif
            </span>
          </label>
          <input type="password" class="form-control" name="password" id="signinSrPassword" placeholder="********" aria-label="********" required
                 data-msg="Your password is invalid. Please try again."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success"
                  autocomplete="current-password">
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="form-group row">
            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>
        <!-- End Form Group -->

        <!-- Button -->
        <div class="row align-items-center mb-5">
          <div class="col-6">
            <span class="small text-muted">Don't have an account?</span>
            <a class="small" href="{{ route('register') }}">Signup</a>
          </div>

          <div class="col-6 text-right">
            <button type="submit" class="btn btn-primary transition-3d-hover">{{ __('Login') }}</button>
          </div>
        </div>
        <!-- End Button -->
      </form>
    </div>
    <!-- End Login Form -->
@endsection
