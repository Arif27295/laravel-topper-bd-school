<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/style.css')}}" rel="stylesheet">
	<link rel="icon" href="{{asset('asset/img/icon.png')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<title>Topper BD School</title>
</head>
<body>
	<div class="wraaper">
		<div class="row login-row">
			<div class="col-sm-9 col-md-7 col-lg-5 col-xl-4 login-col-5">
				<h3><img src="{{asset('asset/img/icon-2.png')}}"> <span>Login</span></h3><Br>
				<form action="{{ route('login') }}" method="post">
                @csrf
					<div class="form-group">
						<label for="email" :value="__('Email')" class="form-label">Email :</label><br>
						<input type="email" class="form-control" id="email" placeholder="Enter email..." name="email" :value="old('email')" required>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
					</div><br>
					<div class="form-group" style="position:relative">
						<label for="password" :value="__('Password')" class="form-label">Password :</label><br>
						<input type="password" class="form-control" id="password" placeholder="Enter password..." name="password" autocomplete="current-password" required>
						<i class="ri-eye-fill"></i>
						<i class="ri-eye-off-fill" style=" display:none"></i>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
					</div>
                    <div class="login-forget-link mt-2 mb-2"><a href="{{ route('password.request') }}">Forget Password?</a></div>
					<button type="submit" class="login-submit" name="login">Sign Me In</button>
                    <div class="login-forget-link mt-2 mb-2 text-start"><span class="text-white">Don't have an account? </span><a href="{{ route('register') }}">Sign Up</a></div>
				</form>
			</div>
		</div>
	</div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
	<script>
		 $(document).ready(function(){
		
		//login-pannel-start--
		$(".ri-eye-fill").click(function(){
			$(this).css("display","none");
			$(".ri-eye-off-fill").css("display","block");
			 $('#password').attr('type', 'text');
		});
		$(".ri-eye-off-fill").click(function(){
			$(this).css("display","none");
			$(".ri-eye-fill").css("display","block");
			 $('#password').attr('type', 'password');
		});
		//login-pannel-end--
		
		 });
	</script>
</body>
</html>