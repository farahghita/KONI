<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login-KONI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images_login/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_login/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts_login/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts_login/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_login/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_login/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_login/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_login/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_login/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css_login/util.css">
	<link rel="stylesheet" type="text/css" href="css_login/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{ route('loginn') }}" method="post">
				{{ csrf_field() }}
					<span class="login100-form-title p-b-43">
						Silahkan Login
					</span>


					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="emaill">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Ingat saya
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Lupa Password?
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							<a href="/register_2"> atau daftar disini<a>
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images_login/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="vendor_login/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor_login/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor_login/bootstrap/js/popper.js"></script>
	<script src="vendor_login/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendo_loginr/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor_login/daterangepicker/moment.min.js"></script>
	<script src="vendo_loginr/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor_login/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js_login/main.js"></script>

</body>
</html>
