<!-- HEADER -->
		<header class=" black-gray flex justify-between align-center">
			<div class="section">
				<a href="<?=$root?>" class="logo  uppercase">
					<!-- <img src="<?=$root?>img/icon/logo_crop.jpg" width="25px" height="25px" > -->
					K<span class="e">i</span>vu B<span class="e">o</span>x
				</a>
			</div>
			<div class="section menu roboto capitalize flex justify-between align-center">
				<span class="btn-hover">
					<a href="#" class="nav-link ">
						services
						<i class="icon-down-open"></i>	
					</a>

					<ul class="capitalize roboto black-gray hover-menu">
						<li><a href="<?=$root?>plan/web" class="">web design</a></li>
						<li><a href="<?=$root?>plan/mobile" class="">mobile app</a></li>
						<li><a href="<?=$root?>plan/software" class="">software</a></li>
					</ul>
				</span>

				<span class="btn-hover">
					<a href="#" class="nav-link ">
						projects
						<i class="icon-down-open"></i>	
					</a>

					<ul class="capitalize roboto black-gray hover-menu">
						<li><a href="http://kivubox.com" class="capitalize">kivubox</a></li>
						<li><a href="http://kudusan.comz.com" class="capitalize">Kudusan</a></li>
						<li><a href="http://wesofia.com" class="capitalize">Wesofia</a></li>
					</ul>
				</span>

				<a href="<?=$root?>developers" class="nav-link">developers</a>
				<a href="<?=$root?>home/index#contact" class="nav-link">contact us</a>
				
				<?php 
					if(!$this->loggedin()):
				 ?>

				<a href="<?=$root?>login" class="btn-small default sign uppercase">
					<i class="icon-lock"></i>
					log in
				</a>

				<?php 
					else:
				 ?>

				<a href="<?=$root?>panel" class="btn-small default sign uppercase">
					<i class="icon-user"></i>
					panel
				</a>

				<?php 
					endif;
				 ?>

				<span class="btn-menu">
					<i class="icon-menu"></i>
				</span>
			</div>

			<div class="side-menu black-gray roboto capitalize">
				<span class="btn-hover">
					<a href="#" class="nav-link ">
						services
						<i class="icon-down-open"></i>	
					</a>

					<ul class="capitalize roboto black-gray hover-menu">
						<li><a href="<?=$root?>plan/web" class="">web design</a></li>
						<li><a href="<?=$root?>plan/mobile" class="">mobile app</a></li>
						<li><a href="<?=$root?>plan/software" class="">software</a></li>
					</ul>
				</span>

				<span class="btn-hover">
					<a href="#" class="nav-link ">
						projects
						<i class="icon-down-open"></i>	
					</a>

					<ul class="capitalize roboto black-gray hover-menu">
						<li><a href="http://kivubox.com" class="capitalize">kivubox</a></li>
						<li><a href="http://kudusan.comz.com" class="capitalize">Kudusan</a></li>
						<li><a href="http://wesofia.com" class="capitalize">Wesofia</a></li>
					</ul>
				</span>
				<a href="<?=$root?>developers" class="nav-link">developers</a>
				<a href="<?=$root?>home/index#contact" class="nav-link">contact us</a>
			</div>

		</header>