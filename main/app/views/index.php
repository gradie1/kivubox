<!DOCTYPE html>	
<html lang="en">
<head>
	<meta http-equi="Content-type" content="text/html, charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod">
	<meta name="author" content="Grace Lungu B.">
	<title>Home</title>

	<!-- WEBSITE ICON -->
	<link rel="icon" href="<?=$root?>img/icon/logo_crop.jpg">

	<!-- ENTYPO FONTS -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/fonts/entypo/entypo.css">

	<!-- CSS LIB -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/lib.css">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/index.css">
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/header.css">

	<!-- JQUERY -->
	<script type="text/javascript" src="<?=$root?>js/jquery.min.js"></script>
	<!-- JS LIB -->
	<script type="text/javascript" src="<?=$root?>js/lib.js"></script>

</head>

<body id="body" >

	<!-- PAGE LOADING -->
	<div class="loading flex column justify-center align-center">
		<div class="lamp flex column justify-center align-center">
			<div class="balb "></div>
		</div>
	</div>

	<div class="app">

		<!-- HEADER -->
		<?php require_once 'header.php'; ?>

		<!-- LANDING -->
		<section class="landing roboto cover computer">
			<div class="content flex column justify-around align-center">
				<div class="welcome">
					welcome to the developers crowd
				</div>
				<div class="intro">
					Do you have any project that requires a developer,
					or you are a developer looking for some project?
					Submit your project here or register as a developer.
				</div>

				<div class="options ">
					<a href="#services" class="btn-big uppercase submit default">
						<i class="icon-docs"></i>
						Submit
					</a>
					<a href="<?=$root?>signup" class="btn-big uppercase start">get started</a>
				</div>

				<div class="intro-contact flex column justify-between align-center">
					<div class="callUsOn">
						Call us on
					</div>
					<span class="intro-phone ">
						<i class="icon-phone" style="margin:0"></i>
						00 256 70-697-3278
					</span>
				</div>

			</div>

		</section>



		<!-- SERVICES -->
		<section class="services roboto " id="services">
			<div class="success">
				<?php if($data[0]=='success') echo "<i class='icon-check'></i> Your project was successfully submited" ?>
			</div>
			<div class="section-name capitalize">
				our services
			</div>
			<div class="subtitle ">
				We provide profesional services.
			</div>
			<div class="service-list flex wrap justify-around align-center">

				<div class="service flex column justify-start align-center">
					<div class="icon">
						<i class="icon-globe" style="margin:0"></i>
					</div>
					<div class="name">
						Web development
					</div>
					<div class="description">
						Any thing that requires web developement.
					</div>
					<a href="<?=$root?>plan/web" class="btn-big uppercase submit default">
						<i class="icon-basket"></i>
						order now
					</a>
				</div>

				<div class="service flex column justify-start align-center">
					<div class="icon">
						<i class="icon-mobile" style="margin:0"></i>
					</div>
					<div class="name">
						Mobile Apps
					</div>
					<div class="description">
						Apps for different mobile platform
					</div>
					<a href="<?=$root?>plan/app" class="btn-big uppercase submit default">
						<i class="icon-basket"></i>
						order now
					</a>
				</div>

				<div class="service flex column justify-start align-center">
					<div class="icon">
						<i class="icon-monitor" style="margin:0"></i>
					</div>
					<div class="name">
						Softwares
					</div>
					<div class="description">
						Basic business software
					</div>
					<a href="<?=$root?>plan/soft" class="btn-big uppercase submit default">
						<i class="icon-basket"></i>
						order now
					</a>
				</div>

			</div>
		</section>

		<!-- PROJECTS -->
		<section class="projects roboto black-gray flex column justify-between align-center" id="projects">
			<div class="title">
				<div class="name capitalize">
					Some projects
				</div>
				<div class="subtitle">
					These are some of our projects
				</div>
			</div>
			<div class="wrapper flex wrap justify-between align-start">
				<div class="project flex column justify-start align-center">
					<div class="image cover kivustore"></div>
					<div class="name capitalize">kivuStore</div>
					<div class="description">
						An online shopping website with its mobile app.
					</div>
					<a href="http://kivubox.com" class="visit uppercase btn-big default submit">
						<i class="icon-eye"></i>
						visit	
					</a>
				</div>
				<div class="project">
					<div class="image cover computer3"></div>
					<div class="name capitalize">Kudusan</div>
					<div class="description">
						A job finder android application
					</div>
					<a href="http://wesofia.com" class="visit uppercase btn-big default submit">
						<i class="icon-eye"></i>
						visit	
					</a>
				</div>
			</div>
		</section>

		<!-- ABOUT ME -->
		<section class="section about-me roboto flex column justify-center align-start">
			<div class="wrapper">
				<div class="name ">
					About me
				</div>
				<div class="subtitle">
					I am a developer!
				</div>
			</div>
			<div class="info flex  wrap justify-center align-center">
				<div class="description flex column justify-between align-start">
					<span>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
						<div class="name capitalize">
							grace lungu b.
						</div>
					</span>

					<a href="<?= $this->root.'hire/index/1'?>" class="btn-big submit default uppercase">
						hire me
					</a>

				</div>
				<div class="image-wraper ">
					<div class="image cover me"></div>
				</div>
			</div>
		</section>




		<!-- DEVELOPERS -->
		<section class="developers roboto flex column justify-center align-center" id="developers">
			<div class="name capitalize">
				developers
			</div>
			<div class="list flex wrap justify-center align-center">

				<?php 
					if($this->devs):
						foreach($this->devs as $dev):
				 ?>

				<div class="developer">
					<div class="image contain "
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

			<a href="<?= $this->root.'developers/'?>" class="btn-big default uppercase">
					more developers
				</a>

		</section>



		<!-- CONTACT -->
		<section class="contact roboto flex wrap justify-around align-start" id="contact">
			<form method="POST" class="flex column justify-center align-start">
				<div class="title capitalize">
					contact us
				</div>
				<span class="capitalise sent">
					<?php if($data[0]=='sent') echo "<i class='icon-check'></i> Message sent" ?>
				</span>
				<label class="capitalize">email</label>	
				<input type="email" name="email" maxlength="50" class="email" required>
				<label class="capitalize">title</label>
				<input type="text" name="title" class="object" required>
				<label class="capitalize">message</label>
				<textarea class="body" name="message" maxlength="1000" required></textarea>
				<div>
					<input type="submit" name="submit" value="send" class="btn-big default uppercase">
				</div>
			</form>
			<div class="about flex column justify-between align-start">
				<div class="title capitalize">
					about us
				</div>
				<div class="text">
					We are a team of developers, with experiences and enough skills to
					satisfy our clients with our services by
					developing websites, mobile apps, private or business software
					with a professional look and quality.
					We are currently looking for developers to work with in any of
					the fields listed above, with professional skills. <br>
					Please don't hesitate to contact us for any reason 
					and follow us on facebook for more information and news.
				</div>
				<div class="social">
					<a href="#" class="">
						<i class="icon-facebook shadow-1"></i>
					</a>
				</div>
			</div>
		</section>

		<!-- FOOTER -->
		<footer class="flex roboto justify-center align-center">
			<span class="capitalize white">
				DevCrowd &copy <?= date("Y"); ?>
			</span>
		</footer>

	</div>

	<!-- JS -->
	<script type="text/javascript" src="<?=$root?>js/index.js"></script>
</body>
</html>