<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<title>Sign In - User</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body {
			font-family: 'Roboto', sans-serif;
			background: #f5f5f5;
		}

		.form-control {
			min-height: 41px;
			box-shadow: none;
			border-color: #ddd;
		}

		.form-control,
		.btn {
			border-radius: 3px;
		}

		.signup-form {
			width: 430px;
			margin: 0 auto;
			padding: 30px 0;
		}

		.signup-form form {
			color: #555;
			border-radius: 3px;
			margin-bottom: 15px;
			background: #fff;
			border: 1px solid #f3f3f3;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
		}

		.signup-form h2 {
			color: #636363;
			font-weight: bold;
			margin-top: 0;
			text-align: center;
		}

		.signup-form p {
			text-align: center;
		}

		.signup-form hr {
			margin: 0 -30px 20px;
		}

		.signup-form .form-group {
			margin-bottom: 20px;
		}

		.signup-form label {
			font-weight: normal;
			font-size: 13px;
		}

		.signup-form input[type="checkbox"] {
			margin-top: 2px;
		}

		.signup-form .btn {
			font-size: 16px;
			font-weight: bold;
			background: #3598dc;
			border: none;
			min-width: 140px;
		}

		.signup-form .btn:hover,
		.signup-form .btn:active {
			background: #2389cd;
			outline: none !important;
		}

		.signup-form a {
			text-decoration: underline;
		}

		.signup-form a:hover {
			text-decoration: none;
		}

		.signup-form form a {
			color: #3598dc;
			text-decoration: none;
		}

		.signup-form form a:hover {
			text-decoration: underline;
		}
	</style>
</head>

<body>
	<div class="signup-form">
		<form action="<?php echo base_url('login/user_login'); ?>" method="post">
			<h2>Sign In</h2>
			<p>Silahkan isi dengan username dan password yang benar</p>
			<hr>
			<!-- validasi error -->
			<?php if ($error = $this->session->flashdata('pesan')) { ?>
			<div class="alert alert-dismissible alert-danger">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php echo $error; ?>
			</div>

			<?php } ?>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username" value="<?php echo set_value( 'username'); ?>"
				 placeholder="Username">
				<?php echo form_error('username', '<span class="text-danger">','</span>'); ?>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" value="<?php echo set_value( 'password'); ?>"
				 placeholder="Password">
				<?php echo form_error('password', '<span class="text-danger">','</span>'); ?>
			</div>
			<div class="form-group" style="padding-bottom: 20px;">
				<button type="submit" class="btn btn-primary btn-lg pull-right">Sign In</button>
			</div>
		</form>
		<div class="text-center">Belum punya akun?
			<a href="<?php echo base_url('login/register'); ?>">Daftar sekarang</a>
		</div>
	</div>
</body>

</html>