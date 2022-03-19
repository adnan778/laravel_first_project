@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
        <div class="hold-transition register-page" style="background-color: #353BB4;">
<div class="register-box" >

  <div class="card" style="background-color: #f8f9fA;">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new member</p>

      <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

        <div class="input-group mb-3">
          <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full name" id="name" value="{{ old('name') }}" name="name" :value="old('name')" required autofocus >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          @error('name')
     <div class="alert alert-danger">{{ $message }}</div>
      @enderror
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required>
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
          <input type="number" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number" id="phone" name="phone" value="{{ old('phone') }}" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            
            </div>
          </div>
          @error('phone')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
 </div>
 <div class="input-group mb-3">
          <input type="number" class="form-control @error('age') is-invalid @enderror" placeholder="age" id="age" name="age" value="{{ old('age') }}" required>
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
          @error('age')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
        </div>
        <div class="input-group mb-3">
          <input type="date" class="form-control @error('date') is-invalid @enderror" placeholder="Date OF Birth" id="date" name="date" value="{{ old('date') }}" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-days"></span>
              
            </div>
          </div>
          @error('date')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
        </div>
        <div class="input-group mb-3">
          <!-- <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required> -->
          <select name="gander" id="gander" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
              <option>Male</option>
              <option>Female</option>
              <option>Third Gander</option>
              <option>Costom</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('gander')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
        </div>
        <div class="input-group mb-3">
          <input type="file" class="form-control @error('image') is-invalid @enderror" placeholder="Image" id="image" name="image" value="{{ old('image') }}" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-image"></span>
        
            </div>
          </div>
          @error('image')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Password"  name="password"
                                required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('Password')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password_confirmation" class="form-control w-full @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" placeholder="Retype password" name="password_confirmation" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password_confirmation')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
        </div>
       
        <button type="submit" class="btn btn-primary btn-block">Sign up</button>
      </form>

    

      <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
</div>

        </div>
        <div class="col-lg-3"></div>
    </div>
</div>


@endsection



