<!DOCTYPE html>	
<html lang="en">
<head>
	<meta http-equi="Content-type" content="text/html, charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod">
	<meta name="author" content="Grace Lungu B.">
	<title>Developers</title>

	<!-- WEBSITE ICON -->
	<link rel="icon" href="<?=$root?>img/icon/logo_crop.jpg">

	<!-- ENTYPO FONTS -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/fonts/entypo/entypo.css">

	<!-- CSS LIB -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/lib.css">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/dev.css">
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/header.css">

	<!-- JQUERY -->
	<script type="text/javascript" src="<?=$root?>js/jquery.min.js"></script>
	<!-- JS LIB -->
	<script type="text/javascript" src="<?=$root?>js/lib.js"></script>

</head>

<body id="body" >

	<?php require_once 'header.php'; ?>

	<section class="developers roboto flex column justify-center align-center">
		<div class="title capitalize">
			Developers
		</div>
		<div class="subtitle capitalize">
			Find and hire a developer
		</div>
		<div class="dev-list flex wrap justify-around align-center">
			
			<?php 
					if($this->devs):
						foreach($this->devs as $dev):
				 ?>

			<div class="developer">
				<div class="image contain"
				style="background-image:url('<?= $this->rootdata.'data/dev/'.$dev['email'].'/dp/'.$dev['image'].''?>')"
				></div>
				<div class="name capitalize"><?= $dev['name'] ?></div>
				<div class="fields capitalize">
					<?= $dev['area'] ?>
				</div>
				<a href="<?= $this->root.'hire/index/'.$dev['id'] ?>" class="btn-small uppercase default ">hire</a>
			</div>

			<?php endforeach;endif; ?>	

		</div>

	</section>

	<!-- JS -->
	<script type="text/javascript" src="<?=$root?>js/index.js"></script>
</body>
</html>