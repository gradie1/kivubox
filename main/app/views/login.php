<!DOCTYPE html>	
<html lang="en">
<head>
	<meta http-equi="Content-type" content="text/html, charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod">
	<meta name="author" content="Grace Lungu B.">
	<title>Plan</title>

	<!-- WEBSITE ICON -->
	<link rel="icon" href="<?=$root?>img/icon/logo_crop.jpg">

	<!-- ENTYPO FONTS -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/fonts/entypo/entypo.css">

	<!-- CSS LIB -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/lib.css">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/header.css">
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/login.css">

	<!-- JQUERY -->
	<script type="text/javascript" src="<?=$root?>js/jquery.min.js"></script>
	<!-- JS LIB -->
	<script type="text/javascript" src="<?=$root?>js/lib.js"></script>

</head>

<body id="body" >

	<!-- HEADER -->
	<?php require 'header.php'; ?>

	<!-- LOGIN -->
	<section class="login roboto flex column justify-center align-center">

		<div class="message pass shadow-1">
			<!-- <span>
				<i class="icon-info "></i>
				Wrong email or password
			</span> -->
		</div>
		<form method="POST" class="flex column justify-center align-center shadow-1">
			<div class="title capialize">
				<i class="icon-lock"></i>
				login
			</div>
			<small class="err-log">
				<?= $this->login_err ?>
			</small>
			<input type="email" name="email" maxlength="30" class="" placeholder="<?php if(isset($_POST['submit'])) echo $_POST['email']; else echo "Email"; ?>" required>
			<input type="password"name="password" minlength="6" maxlength="100" class="" placeholder="Password" required>
			<input type="submit" name="submit" class="uppercase" value="login">
			<a href="#" class="capitalize" >forgot password?</a>
		</form>
	</section>

	<!-- JS -->
	<script type="text/javascript" src="<?=$root?>js/lib.js"></script>
</body>
</html>