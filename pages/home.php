<?php /* Template name: Home*/; ?>
<?php get_header(); ?>

<section class="page-wraper">

	<header>
		<div class="header-holder">
			<div class="profile-img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/comum/felipe.jpeg" alt="">
			</div>
			<div class="description">
				<h2>Felipe Kepler Carvalho</h2>
				<span>Desenvolvedor Web Junior</span>
				<div class="social-midia">
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icons8-git.svg" alt=""></a>
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icons8-linkedin.svg" alt=""></a>
				</div>
				<a href="" class="cv-download">
					Baixar Meu Curriculo
				</a>
			</div>
		</div>
	</header>

	<?php get_template_part('/parts/home/menu'); ?>
	<?php get_template_part('/parts/home/carrosel'); ?>
	<div id="teste">

	</div>



</section>

<?php get_footer(); ?>