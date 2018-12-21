<!DOCTYPE html>	
<html lang="en">
<head>
	<meta http-equi="Content-type" content="text/html, charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod">
	<meta name="author" content="Grace Lungu B.">
	<title class="capitalize"><?= $data[0]['name'] ?></title>

	<!-- WEBSITE ICON -->
	<link rel="icon" href="<?=$root?>img/icon/logo_crop.jpg">

	<!-- ENTYPO FONTS -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/fonts/entypo/entypo.css">

	<!-- CSS LIB -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/lib.css">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/header.css">
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/submit.css">
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/hire.css">

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
			<?= $data[0]['name'] ?>
		</div>
		<div class="subtitle">
			<?= $data[0]['area'] ?>
		</div>
		<form class="flex wrap justify-between align-start">
			<div class="left flex column justify-between align-start">
				<div style="width:100%;">
					<label class="capitalize ">About me</label>
					<span class="description">
						<?= $data[0]['description'] ?>
					</span>
				</div>
				<div class="contact flex wrap justify-between align-center">
					<a href="#" >
						<i class="icon-mail"></i>
						<?= $data[0]['email'] ?>
					</a>
					<a href="#">
						<i class="icon-phone"></i>
						<?= $data[0]['phone'] ?>
					</a>
				</div>
			</div>
			<div class="right">
				<div class="profil contain"
				style="background-image:url('<?= $this->rootdata.'data/dev/'.$data[0]['email'].'/dp/'.$data[0]['image'].''?>')"
				>

			</div>
		</div>
	</form>
</section>

<!-- JS -->
<script type="text/javascript" src="<?=$root?>js/lib.js"></script>
</body>
</html>