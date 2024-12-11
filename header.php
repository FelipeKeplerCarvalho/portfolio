<!doctype html>
<html id="topo" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header>
		<div class="header-content container">
			<img src="<?php echo get_template_directory_uri(). '/assets/img/header/Logo.png' ;?>" alt="">
			<div class="desktop-only">
				<?php wp_nav_menu( array( 'menu-cabecalho' => 'Menu cabecalho' )); ?>
			</div>
			<div class="mobile-only btn-mobile-header">
				<img class="active-img" src="<?php echo get_template_directory_uri();?> /assets/img/commum/mobile-menu.svg" alt="">
			</div>
		</div>
		<div class="menu-mobile mobile-only">
			<?php wp_nav_menu(array('menu-cabecalho' => 'Menu cabecalho')) ;?>
		</div>
	</header>