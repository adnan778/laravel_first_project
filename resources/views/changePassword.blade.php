
                    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- login form link -->
   <link rel="icon" type="image/png" href="{{asset('logincss')}}/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logincss')}}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logincss')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logincss')}}/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logincss')}}/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('logincss')}}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logincss')}}/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logincss')}}/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('logincss')}}/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logincss')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{asset('logincss')}}/css/main.css">
    <title>login</title>
  </head>
  <body>


  <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
        @if(Session::has('success'))
          <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <i class="fa fa-check mx-2"></i>
                      <strong>Success!</strong>{{ Session::get('success') }}
                    
          </div>
          @elseif(Session::has('error'))
          <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <i class="fa fa-check mx-2"></i>
                      <strong>error!</strong>{{ Session::get('error') }}
                    
          </div>
          @endif
			<form class="login100-form validate-form"  method="POST" action="{{ route('updatePassword') }}">
        @csrf
				<span class="login100-form-title p-b-37">
				Change Your Password
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter old password">
					<input class="input100 @error('oldpassword') is-invalid @enderror" type="password" name="oldpassword" placeholder="Type your old password">
					<span class="focus-input100"></span>
          @error('oldpassword')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
				</div>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter new password">
					<input class="input100 @error('newpassword') is-invalid @enderror" type="password" name="newpassword" placeholder="Type new password">
					<span class="focus-input100"></span>
          @error('newpassword')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter confirm password">
					<input class="input100 @error('confirmpassword') is-invalid @enderror" type="password" name="confirmpassword" placeholder="Confirm your password">
					<span class="focus-input100"></span>
          @error('confirmpassword')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
				Change password
					</button>
				</div>

			
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
	<script src="{{asset('logincss')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('logincss')}}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('logincss')}}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{asset('logincss')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('logincss')}}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('logincss')}}/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{asset('logincss')}}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('logincss')}}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('logincss')}}/js/main.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>


          
      





