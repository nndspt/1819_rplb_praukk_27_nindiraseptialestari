<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
	<div class="row content">
		<div class="col-md-6 mb-3">
			<img src="hi.jpg" class="img-fluid" alt="image">
		</div>
		<div class="col-md-6">
			<h3 class="signin-text mb-3">Daftar</h3>
			<form>
				<div class="form-group">
					<label for="name">Nama</label>
					<input id="name" type="text" name="name" class="form-control" required autocomplete="name" autofocus>
				</div>
				<div class="form-group">
					<label for="telp">Nomor Handphone</label>
					<input id="talp" type="tel" name="telp" class="form-control" required autocomplete="telp" autofocus>
				</div>
				<div class="form-group">
					<label for="username">Username</label>
					<input id="username" type="text" name="username" class="form-control" required autocomplete="username" autofocus>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control"required autocomplete="current-password">
				</div>
				<!-- <button class="btn btn-class">Login</button> -->
				<button type="button" class="btn btn-class btn-lg btn-block">Daftar</button>
			</form>
			<hr><center>
					<h5>Sudah punya akun?</h5>
                  	<a style="text-decoration: none; color: #FFB69F" href="index.php">Masuk</a>
                </center>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>
</html>