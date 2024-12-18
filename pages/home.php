<?php /* Template name: Home*/; ?>
<?php get_header(); ?>

<section class="page-wraper">
	<?php get_template_part('/parts/home/menu'); ?>
	<header>
		<div class="header-holder">
			<div class="profile-img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/comum/felipe.jpeg" alt="">
			</div>
			<div class="description">
				<h2>Felipe Kepler Carvalho</h2>
				<span>Desenvolvedor Web Júnior</span>
				<div class="social-midia">
					<a href="https://github.com/FelipeKeplerCarvalho" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icons8-git.svg" alt=""></a>
					<a href="https://www.linkedin.com/in/felipe-kepler-carvalho-081543165/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icons8-linkedin.svg" alt=""></a>
				</div>
				<a href="<?php echo get_template_directory_uri(); ?>/assets/files/Curriculum vitæ.pdf" class="cv-download" target="_blank">
					Baixar Meu Currículo
				</a>
			</div>
		</div>
		<span class="copy-right">© 2024 All rights reserved.</span>
		<div class="menu-mobile">
			<div class="holder">
				<span class="menu-mobile-text">Felipe Kepler Carvalho</span>
				<div class="menu-icon">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
		<div class="menu-mobile-itens">
			<div class="profile-img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/comum/felipe.jpeg" alt="">
			</div>
			<div class="description">
				<h2>Felipe Kepler Carvalho</h2>
				<span>Desenvolvedor Web Júnior</span>
			</div>
			<ul>
				<li><a class="item-menu" href="#hero" data-slide="0"><img src="<?= get_template_directory_uri(); ?>/assets/svg/Home.svg" alt=""><span>Home</span></a></li>
				<li><a class="item-menu" href="#about" data-slide="1"><img src="<?= get_template_directory_uri(); ?>/assets/svg/User-Avatar.svg" alt=""><span>Sobre Mim</span></a></li>
				<li><a class="item-menu" href="#education" data-slide="2"><img src="<?= get_template_directory_uri(); ?>/assets/svg/Education.svg" alt=""><span>Formação</span></a></li>
				<li><a class="item-menu" href="#porfolio" data-slide="3"><img src="<?= get_template_directory_uri(); ?>/assets/svg/Cics-Program.svg" alt=""><span>Portfólio</span></a></li>
				<li><a class="item-menu" href="#contact" data-slide="4"><img src="<?= get_template_directory_uri(); ?>/assets/svg/Email-New.svg" alt=""><span>Contato</span></a></li>
			</ul>
			<a class="cv-mobile" href="<?php echo get_template_directory_uri(); ?>/assets/files/Curriculum vitæ.pdf" class="cv-download" target="_blank">
				Baixar Meu Currículo
			</a>
		</div>
	</header>


	<?php get_template_part('/parts/home/carrosel'); ?>

</section>

<?php get_footer(); ?>