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
			<div class="title">
				<a href="{{url('/login')}}">Login</a> 
			</div>
			<div class="title aktiv">
				SignUp
			</div>
		</div> 

		<div class="form-container">
			<div class="form-inner">
				<form action="" method="POST" class="login">	
					<div class="field">
						<input type="text" name="nama" placeholder="Nama" required>
					</div>
					<div class="field">
						<input type="email" name="email" placeholder="Email Address" required>
					</div>
					<div class="field">
						<input type="text" name="alamat" placeholder="Alamat Lengkap" required>
					</div>
					<div class="field">
						<input type="text" name="tlp" min="628" placeholder="No Telepon" required>
					</div>
					<div class="field">
						<input type="text" name="pass" placeholder="Password" required>
					</div>
					<div class="field btn">
						<div class="tombol">
							<a href="{{url('login')}}">Sign Up</a>
						</div>
					</div>
					<div class="signup-link">Sudah Punya Akun ? <a href="login.php"> LogIn Now</a></div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>