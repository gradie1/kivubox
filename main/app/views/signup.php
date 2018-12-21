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
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/signup.css">

	<!-- JQUERY -->
	<script type="text/javascript" src="<?=$root?>js/jquery.min.js"></script>
	<!-- JS LIB -->
	<script type="text/javascript" src="<?=$root?>js/lib.js"></script>

</head>

<body id="body" >

		<!-- HEADER -->
	<?php require 'header.php'; ?>

	<section class="submit roboto flex column justify-start align-center">
		<div class="title capitalize">
			sign up
		</div>
		<div class="subtitle">
			Make sure you mention some of the projects you have done.
		</div>
		<form method="POST" class="flex wrap justify-between align-start" >
			<div class="left">
				<label class="capitalize">Programming area(s)</label>
				<input type="text" name="area" id="project-name" minlength="4" maxlength="50" value="<?php if(isset($_POST['submit'])) echo $_POST['area'];?>" required>
				<label class="capitalize">full name</label>
				<input type="text" name="name" minlength="6" maxlength="30" value="<?php if(isset($_POST['submit'])) echo $_POST['name'];?>" required>
				<label class="capitalize">description</label>
				<textarea id="description" name="description" minlength="100" maxlength="500" value="Minimum 100 characters" required><?php if(isset($_POST['submit'])) echo $_POST['description'];?></textarea>
				<span id="count"></span>
			</div>
			<div class="right">
				<label class="capitalize">email</label>
				<input type="email" name="email" minlength="4" maxlength="25" value="<?php if(isset($_POST['submit'])) echo $_POST['email'];?>" required>
				<span class="err-log">
					<?php if(isset($_POST['submit'])) echo $this->email_err;?>
				</span>	
				<label class="capitalize">phone</label>
				<input type="number" name="phone" minlength="4" maxlength="15" value="<?php if(isset($_POST['submit'])) echo $_POST['phone'];?>" required>
				<label class="capitalize">password</label>
				<input type="password" name="password" minlength="6" maxlength="50"  required>
				<label class="capitalize">confirm</label>
				<input type="password" name="password2" minlength="6" maxlength="50"  required>
				<span class="err-log">
					<?php if(isset($_POST['submit'])) echo $this->password_err;?>
				</span>	
				<input type="submit" name="submit" class="btn-big default uppercase submit-bottom" value="sign up">
			</div>
		</form>
	</section>

	<!-- JS -->
	<script type="text/javascript" src="<?=$root?>js/lib.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var e = Effect;
				var a = e.input_count('#description','#count','Characters');
		});
	</script>
</body>
</html>

