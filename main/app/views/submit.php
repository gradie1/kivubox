<!DOCTYPE html>	
<html lang="en">
<head>
	<meta http-equi="Content-type" content="text/html, charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod">
	<meta name="author" content="Grace Lungu B.">
	<title>Submit</title>

	<!-- WEBSITE ICON -->
	<link rel="icon" href="<?=$root?>img/icon/logo_crop.jpg">

	<!-- ENTYPO FONTS -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/fonts/entypo/entypo.css">

	<!-- CSS LIB -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/lib.css">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/header.css">
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/submit.css">

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
			<?= $data[0] ?> <?= $data[1] ?>
		</div>
		<div class="subtitle">
			Submit your project here, and you will be notified very soon.
		</div>
		<form method="POST" class="flex wrap justify-between align-start">
			<div class="left">
				<label class="capitalize">project name</label>
				<input type="text" name="pname" maxlength="50" id="project-name" required>
				<label class="capitalize">description</label>
				<textarea name="description" minlength="10" maxlength="500" required></textarea>
			</div>
			<div class="right">
				<label class="capitalize">your name</label>
				<input type="text" name="cname" minlength="3" maxlength="30" required>
				<label class="capitalize">email</label>
				<input type="email" name="email" required>
				<label class="capitalize">phone</label>
				<input type="number" name="phone" required>
				<span class="explain">
					You will receive a call or an email containing the details
					of your project and the next step to the developement.
				</span>
				<input type="submit" name="submit" class="btn-big default uppercase submit-bottom" value="submit ">
			</div>
		</form>
	</section>


	<!-- JS -->
	<script type="text/javascript" src="<?=$root?>js/lib.js"></script>
</body>
</html>