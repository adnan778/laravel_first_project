@extends('layouts.app')

@section('content')
@if (Route::has('login'))
                    @auth
                    @include('home')
                    @else
                    <div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
        <div class="hold-transition login-page">
        <div class="login-box">

  <!-- /.login-logo -->
  <div class="card" style="margin-top:100px;">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="input-group mb-3">
 
 
          <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="email" name="email" value="{{ old('password') }}" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          
          </div>
          @error('email')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" value="{{ old('password') }}" required autocomplete="current-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          
          </div>
          @error('password')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
             
              <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="{{ route('password.request') }}">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</div>

        </div>
        <div class="col-lg-4"></div>
    </div>
</div>

                    @endauth
          
            @endif



@endsection
