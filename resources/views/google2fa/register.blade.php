<!DOCTYPE html>
<html lang="en">
<head>
	<title>H2C Development</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('loginpage/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/css/main-auth.css')}}">
<!--===============================================================================================-->
</head>
<body>
	

<div class="container-login100">
    <div class="wrap-login100">
            <div class="panel panel-default">
                <div class="panel-heading"><h2 style="text-align: center">Set up Google Authenticator</h2></div>

				<form class="form-horizontal" method="POST" action="{{ url('/complete-registration') }}">
                        @csrf
                <div class="panel-body" style="text-align: center;">
                    <p> 1. Scan this QR code with your Google Authenticator App. Alternatively, you can use the code: <code>{{ $secret }}</code></p>
                    <div>
                        <div class="form-group">{!! $QR_Image !!}</div>
                    </div>
                    <p> 2. Enter the pin from Google Authenticator app:</p>

					
                   
					<div class="form-group">
                        <input class="input100 " type="text" name="one_time_password" id="one_time_password" placeholder="" required autofocus>
					</div>

					<div>
                        <button type="submit" class="btn btn-success">Complete Registration</button>
                    </div>
						
				    </form>

                    <div class="text-center p-t-12">
						<a class="txt1" href="{{ route('login') }}">
							Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>

                </div>
            </div>
        </div>
    </div>
</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{asset('loginpage/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loginpage/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('loginpage/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{'loginpage/vendor/select2/select2.min.js'}}"></script>
<!--===============================================================================================-->
	<script src="{{'loginpage/vendor/tilt/tilt.jquery.min.js'}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('loginpage/js/main.js')}}"></script>

</body>
</html>