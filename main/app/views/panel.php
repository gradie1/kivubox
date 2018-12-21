<!DOCTYPE html>	
<html lang="en">
<head>
	<meta http-equi="Content-type" content="text/html, charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod">
	<meta name="author" content="Grace Lungu B.">
	<title>Panel</title>

	<!-- WEBSITE ICON -->
	<link rel="icon" href="<?=$root?>img/icon/logo_crop.jpg">

	<!-- ENTYPO FONTS -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/fonts/entypo/entypo.css">

	<!-- CSS LIB -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/lib.css">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/header.css">
	<link rel="stylesheet" type="text/css" href="<?=$root?>css/panel.css">

	<!-- JQUERY -->
	<script type="text/javascript" src="<?=$root?>js/jquery.min.js"></script>
	<!-- JS LIB -->
	<script type="text/javascript" src="<?=$root?>js/lib.js"></script>

</head>

<body id="body" >

	<!-- HEADER -->
	<!-- HEADER -->
		<header class=" black-gray roboto flex justify-between align-center">
			<div class="title uppercase">
				dashboard
			</div>
			<div class="section menu roboto capitalize flex justify-end align-center">
				<div class="name">
					<?= $this->name ?>
				</div>

				<!-- SET PROFIL -->

				<form method="POST" enctype="multipart/form-data">
				<label class="profil-wrapper cover" for="profil" title="Profil image"
				style="background-image:url('<?= $this->rootdata.'data/dev/'.$_SESSION["email"].'/dp/'.$this->profil.''?>')"
				>

				</label>

				<input type="file" name="profil" id="profil" hidden>
				<input type="submit" name="submit" id="submitImage" hidden>
				</form>


				<a title="logout" href="<?=$root?>panel/out" class="btn-small default sign uppercase red">
					<i class="icon-lock-open"></i>
				</a>
			</div>

		</header>
	

	<section class="dashboard flex justify-start align-start">
	<section class="side-nav roboto flex column justify-start align-center">
		<a href="<?=$root?>" class="">
			<i class="icon-home"></i>
		</a>
		<a href="#" class="" id="published">
			<i class="icon-publish" ></i>
		</a>
		<a href="#" class="" id="grabbed">
			<i class="icon-window"></i>
		</a>
	</section>
	<section class="middle flex column justify-start align-start roboto">
		<div class="flex justify-end align-center" style="width:100%;">
		<label class="text capitalize btn-small red set"  for="submitImage">
			set selected image
		</label>
		</div>
		<div class="notice ">
			<div class="text ">
				Please it is important for you to have a professional profil picture.
			</div>
		</div>


		<div class="projects flex column justify-start align-start roboto" id="projects">
			<div class="top capitalize flex justify-between align-center roboto">
				<div class="name">
					submited projects
				</div>
				<div class="number">
					<?php echo count($data); ?>
				</div>
			</div>






			<?php 

				if(isset($data[0])):

					foreach($data as $project):

			 ?>




			<div class="project">
				<a href="#" class="name pname capitalize flex justify-between align-center" id="name">
					<span class="title">
						<?= $project['name'] ?>
					</span>
					<span class="status">
						pending
					</span>
				</a>
				<div class="description" >

					<?= $project['description'] ?>

				

				<?php 

					// SELECT CLIENT INFOS 

					$infos = $this->select_data('client','*','WHERE email="'.$project['owner'].'"');

					if($infos):

				 ?>



					<div class="details flex wrap justify-between align-end">
						<div class=" flex wrap justify-start align-end">
						<span class="capitalize name">
							<i class="icon-user"></i>				
							<?= $infos[0]['name'] ?>		
						</span>
						<span class="email">
							<i class="icon-mail"></i>
							<?= $infos[0]['email'] ?>
						</span>
						<span class="phone">
							<i class="icon-phone"></i>
							<?= $infos[0]['phone'] ?>
						</span>
					</div>
						<a href="<?= $this->root.'panel/index/grab/'.$infos[0]['id']?>" class="btn-small default uppercase">
							<i class="icon-install"></i>
							grab
						</a>
					</div>
				</div>
			</div>

			

			<?php
				endif; 
				endforeach;
				else:
			 ?>
				<span class="no">
					No project found
				</span>
			<?php 
				endif;
			 ?>







		</div>

		<?php 

			if(isset($data)):

					//SELECT PROJECTS
					$grabbed = $this->select_data('project','*','WHERE dev ="'.$this->dev.'" AND active="1"');

		 ?>

		<div class="projects flex column justify-start align-start roboto" id="unpub">
			<div class="top capitalize flex justify-between align-center roboto">
				<div class="name">
					Grabbed projects
				</div>
				<div class="number">
					<?php echo count($grabbed); ?>
				</div>
			</div>






			<?php 

					foreach($grabbed as $project):

			 ?>




			<div class="project">
				<a href="#" class="name pname capitalize flex justify-between align-center" id="name">
					<span class="title">
						<?= $project['name'] ?>
					</span>
					<span class="status">
						pending
					</span>
				</a>
				<div class="description" >

					<?= $project['description'] ?>

				

				<?php 

					// SELECT CLIENT INFOS 

					$infos = $this->select_data('client','*','WHERE email="'.$project['owner'].'"');

					if($infos):

				 ?>



					<div class="details flex wrap justify-between align-end">
						<div class=" flex wrap justify-start align-end">
						<span class="capitalize name">
							<i class="icon-user"></i>				
							<?= $infos[0]['name'] ?>		
						</span>
						<span class="email">
							<i class="icon-mail"></i>
							<?= $infos[0]['email'] ?>
						</span>
						<span class="phone">
							<i class="icon-phone"></i>
							<?= $infos[0]['phone'] ?>
						</span>
					</div>
						<a href="<?= $this->root.'panel/index/rel/'.$infos[0]['id']?>" class="btn-small default uppercase">
							<i class="icon-publish"></i>
							release
						</a>
						<a href="<?= $this->root.'panel/index/del/'.$infos[0]['id']?>" class="btn-small default uppercase red remove">
							<i class="icon-trash"></i>
							delete
						</a>
					</div>
				</div>
			</div>

			

			<?php
				endif; 
				endforeach;
				endif;
				if(!$grabbed):
			 ?>
				<span class="no">
					You need to grab a project
				</span>
			<?php 
				endif;
			 ?>







		</div>




	</section>
	</section>

	<!-- JS -->
	<script type="text/javascript" src="<?=$root?>js/lib.js"></script>
	<script type="text/javascript" src="<?=$root?>js/panel.js"></script>
</body>
</html>