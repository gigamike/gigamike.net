@extends('layouts.app')

@section('content')
<!-- Login Form -->
    <div class="container space-2">
      <form method="POST" action="{{ route('password.update') }}" class="js-validate w-md-75 w-lg-50 mx-md-auto">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <!-- Title -->
        <div class="mb-7">
          <h2 class="h3 text-primary font-weight-normal mb-0">{{ __('Reset Password') }}</h2>
        </div>
        <!-- End Title -->

        <!-- Form Group -->
        <div class="js-form-message form-group">
          <label class="form-label" for="signinSrEmail">{{ __('Email address') }}</label>

          <input type="email" class="form-control" name="email" id="signinSrEmail" placeholder="{{ __('Email address') }}" aria-label="{{ __('Email address') }}" required
                 data-msg="Please enter a valid email address."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success"
                 autocomplete="email"
                  value="{{ $email ?? old('email') }}"
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
          <label class="form-label" for="signinSrEmail">{{ __('Password') }}</label>
          <input type="password" class="form-control" name="password" id="signinSrPassword" placeholder="{{ __('Email address') }}" aria-label="{{ __('Email address') }}" required
                 data-msg="Please enter a valid email address."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success"
                  autocomplete="new-password"
                  value="{{ $email ?? old('email') }}"
                  autofocus>

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="js-form-message form-group">
          <label class="form-label" for="signinSrConfirmPassword">{{ __('Confirm Password') }}</label>

          <input type="password" class="form-control" name="password_confirmation" id="signinSrConfirmPassword" placeholder="********" aria-label="********" required
                 data-msg="Password does not match the confirm password."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success"
                autocomplete="new-password">
        </div>
        <!-- End Form Group -->

        <!-- Button -->
        <div class="row align-items-center mb-5">
          <div class="col-6">
            <span class="small text-muted">Already have an account?</span>
            <a class="small" href="{{ route('login') }}">Login</a>
          </div>

          <div class="col-6 text-right">
            <button type="submit" class="btn btn-primary transition-3d-hover">{{ __('Reset Password') }}</button>
          </div>
        </div>
        <!-- End Button -->
      </form>
    </div>
    <!-- End Login Form -->
@endsection
