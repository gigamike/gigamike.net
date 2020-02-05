@extends('layouts.app')

@section('content')
<!-- Login Form -->
    <div class="container space-2">
      <form method="POST" action="{{ route('password.confirm') }}" class="js-validate w-md-75 w-lg-50 mx-md-auto">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @csrf
        <!-- Title -->
        <div class="mb-7">
          <h2 class="h3 text-primary font-weight-normal mb-0">{{ __('Confirm Password') }}</h2>
          <p>{{ __('Please confirm your password before continuing.') }}</p>
        </div>
        <!-- End Title -->

        <!-- Form Group -->
        <div class="js-form-message form-group">
          <label class="form-label" for="signinSrEmail">{{ __('Password') }}</label>
          <input type="password" class="form-control" name="password" id="signinSrEmail" placeholder="{{ __('Password') }}" aria-label="{{ __('Password') }}" required
                 data-msg="Please enter a valid email address."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success"
                 autocomplete="current-password"
                  autofocus>

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <!-- End Form Group -->

        <!-- Button -->
        <div class="row align-items-center mb-5">
          <div class="col-6">
            <a class="small" href="{{ route('password.request') }}">  {{ __('Forgot Your Password?') }}</a>
          </div>

          <div class="col-6 text-right">
            <button type="submit" class="btn btn-primary transition-3d-hover">{{ __('Confirm Password') }}</button>
          </div>
        </div>
        <!-- End Button -->
      </form>
    </div>
    <!-- End Login Form -->
@endsection
