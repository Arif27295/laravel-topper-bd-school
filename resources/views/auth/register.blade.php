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
				<h3><img src="{{asset('asset/img/icon-2.png')}}"> <span>Register</span></h3><Br>
				<form action="{{ route('register') }}" method="post">
                @csrf
                    <div class="form-group">
						<label for="name" :value="__('Name')" class="form-label">Username :</label><br>
						<input type="text" class="form-control" id="name" placeholder="Enter your username..." name="name" :value="old('name')"  required>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
					</div><br>
                    <div class="form-group">
						<label for="email" :value="__('Email')" class="form-label">Email :</label><br>
						<input type="email" class="form-control" id="email" placeholder="Enter your email..." name="email" :value="old('email')"  required>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
					</div><br>
                    <div class="form-group">
						<label for="password" :value="__('Password')" class="form-label">Password :</label><br>
						<input type="password" class="form-control" id="email" placeholder="Enter your password..." name="password" autocomplete="new-password" required>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
					</div><br>
                    <div class="form-group">
						<label for="password_confirmation" :value="__('Confirm Password')"  class="form-label">Confirm Password :</label><br>
						<input type="password" class="form-control" id="password_confirmation" placeholder="Enter your password..." autocomplete="new-password" name="password_confirmation"  required>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
					</div><br>
					<button type="submit" class="login-submit" name="login">Register</button>
                    <div class="login-forget-link mt-2 mb-2 text-start"><a href="{{ route('login') }}">Already Register?</a></div>
                </form>
</body>
</html>
