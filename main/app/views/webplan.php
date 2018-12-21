<!DOCTYPE html>	
<html lang="en">
<head>
	<meta http-equi="Content-type" content="text/html, charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod">
	<meta name="author" content="Grace Lungu B.">
	<title>WEB PLAN</title>

	<!-- WEBSITE ICON -->
	<link rel="icon" href="<?=$root?>img/icon/logo_crop.jpg">

	<!-- ENTYPO FONTS -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/fonts/entypo/entypo.css">

	<!-- CSS LIB -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/lib.css">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/header.css">
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/plan.css">

	<!-- JQUERY -->
	<script type="text/javascript" src="<?=$root?>js/jquery.min.js"></script>
	<!-- JS LIB -->
	<script type="text/javascript" src="<?=$root?>js/lib.js"></script>

</head>

<body id="body" >

	<!-- HEADER -->
	<?php require 'header.php'; ?>

	<section class="plans roboto flex column justify-center align-center">
		<div class="flex column justify-center align-center">
			<div class="title capitalize">
				web plan
			</div>
			<div class="subtitle">
				<i class="icon-docs"></i>
				Choose the best plan for your project
			</div>
		</div>
		

		<!-- PLAN -->
		<div class="plan-list flex wrap justify-around align-center">
			<div class="plan shadow-1">
				<div class="name uppercase">
					static
				</div>
				<div class="subtitle">
					Static content pages
				</div>
				<div class="flex justify-between align-center">
					<div class="price">
						$40
					</div>
					<div class="right-price">
						And Above
					</div>
				</div>
				<div class="feature flex justify-between align-center ">
					<span class="capitalize name">
						max pages
					</span>
					<span class="value">
						20 pages
					</span>
				</div>
				<div class="feature flex justify-between align-center ">
					<span class="capitalize name">
						min duration
					</span>
					<span class="value">
						30 days
					</span>
				</div>
				<div class="feature flex justify-between align-center ">
					<span class="capitalize name">
						domain
					</span>
					<span class="value">
						<i class="icon-check"></i>
					</span>
				</div>
				<div class="feature flex justify-between align-center ">
					<span class="capitalize name">
						hosting
					</span>
					<span class="value">
						<i class="icon-check"></i>
					</span>
				</div>
				<div class="feature flex justify-between align-center ">
					<span class="capitalize name">
						admin panel
					</span>
					<span class="value">
						<i class="icon-cancel"></i>
					</span>
				</div>
				<a href="<?=$root.'submit/index/static/website'?>" class="btn-big default uppercase">
					<i class="icon-docs"></i>
					choose
				</a>
			</div>

			<!-- PLAN -->
			<div class="plan middle default shadow-1">
				<div class="name uppercase">
					Dynamic
				</div>
				<div class="subtitle">
					Dynamic content pages
				</div>
				<div class="flex justify-between align-center">
					<div class="price">
						$100
					</div>
					<div class="right-price">
						And Above
					</div>
				</div>
				<div class="feature flex justify-between align-center ">
					<span class="capitalize name">
						max pages
					</span>
					<span class="value">
						15 pages
					</span>
				</div>
				<div class="feature flex justify-between align-center ">
					<span class="capitalize name">
						min duration
					</span>
					<span class="value">
						60 days
					</span>
				</div>
				<div class="feature flex justify-between align-center ">
					<span class="capitalize name">
						domain
					</span>
					<span class="value">
						<i class="icon-check"></i>
					</span>
				</div>
				<div class="feature flex justify-between align-center ">
					<span class="capitalize name">
						hosting
					</span>
					<span class="value">
						<i class="icon-check"></i>
					</span>
				</div>
				<div class="feature flex justify-between align-center ">
					<span class="capitalize name">
						admin panel
					</span>
					<span class="value">
						<i class="icon-check"></i>
					</span>
				</div>
				<a href="<?=$root.'submit/index/dynamic/website'?>" class="btn-big default uppercase">
					<i class="icon-docs"></i>
					choose
				</a>
			</div>

			<!-- PLAN -->
				<div class="plan shadow-1">
					<div class="name uppercase">
						pro
					</div>
					<div class="subtitle">
						Profesional website
					</div>
					<div class="flex justify-between align-center">
						<div class="price">
							$300
						</div>
						<div class="right-price">
							And Above
						</div>
					</div>
					<div class="feature flex justify-between align-center ">
						<span class="capitalize name">
							max pages
						</span>
						<span class="value">
							unlimited
						</span>
					</div>
					<div class="feature flex justify-between align-center ">
						<span class="capitalize name">
							min duration
						</span>
						<span class="value">
							unlimited
						</span>
					</div>
					<div class="feature flex justify-between align-center ">
						<span class="capitalize name">
							domain
						</span>
						<span class="value">
							<i class="icon-check"></i>
						</span>
					</div>
					<div class="feature flex justify-between align-center ">
						<span class="capitalize name">
							hosting
						</span>
						<span class="value">
							<i class="icon-check"></i>
						</span>
					</div>
					<div class="feature flex justify-between align-center ">
						<span class="capitalize name">
							admin panel
						</span>
						<span class="value">
							<i class="icon-check"></i>
						</span>
					</div>
					<a href="<?=$root.'submit/index/profesional/website'?>" class="btn-big default uppercase">
						<i class="icon-docs"></i>
						choose
					</a>
			</div>

		</section>

		<!-- JS -->
		<script type="text/javascript" src="<?=$root?>js/lib.js"></script>
	</body>
	</html>