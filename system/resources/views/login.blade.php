<!DOCTYPE html>
<html>
<head>
	<title>Login || Sign Up Form</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style-login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> 
<body>
	<div class="wrapper">
		<div class="title-text">
			<div class="title aktiv">
				Login 
			</div>
			<div class="title">
				<a href="{{url('/signup')}}">SignUp </a>
			</div>
		</div> 
		<div class="form-container">
			<div class="form-inner">
				<form action="" method="" class="login">	
					<div class="field">
						<input type="text" name="user" placeholder="Email Address" value="informatika.politap@xample.com" required>
					</div>
					<div class="field">
						<input type="Password" name="pass" placeholder="Password" required value="sunardiganteng">
					</div>
					<div class="pass-link"><a href="">Forgate Password</a></div>
					<div class="field btn">
						<div class="tombol">
							<a href="{{url('index')}}">Login</a>
						</div>
					</div>
					<div class="signup-link"> Belum Punya Akun ? <a href="{{url('/index')}}"> SignUp Now</a></div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>