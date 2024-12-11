<?php

//Definir rota

if (!defined('FUNCTIONS_DIR')) {
	define('FUNCTIONS_DIR', get_template_directory() . '/functions');
};

// Pegar controllers

require_once(FUNCTIONS_DIR . '/controllers.php');


//	Adiciona suportes ao tema
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');

//	Remove Admin Bar para todos
show_admin_bar(false);

//	Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	wp_dequeue_style('wc-blocks-style'); // Remove WooCommerce block CSS
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);

//	Desativa Gutenberg Block Editor
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_widgets_block_editor', '__return_false');


//	ACF menu "Opções do Tema" no Admin
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title'    => 'Opções do Tema',
		'menu_title'    => 'Opções do Tema',
		'menu_slug'     => 'options',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));
}


//	Carrega Estilo
function load_style($name)
{
	if ($name) {
		wp_enqueue_style($name, get_template_directory_uri() . '/assets/css/' . $name . '.css', array(), time(), 'all');
	}
}

//	Carrega Script
function load_script($name)
{
	if ($name) {
		wp_enqueue_script($name, get_template_directory_uri() . '/assets/js/' . $name . '.js', array(), time(),  true);
	}
}


//	Exibir template atual	
function show_template()
{
	global $template;
	return basename($template);
}
add_action('wp_head', 'show_template');





//	Insere CSS e JS
function labbo_scripts()
{

	//	JQUERY
	wp_enqueue_script("jquery");

	//Fancy Box
	wp_enqueue_style(
        'fancybox-css',
        'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css',
        array(), // Dependências, se houver
        null     // Versão (null para evitar cache)
    );

	wp_enqueue_script(
        'fancybox-js',
        'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js',
        array(), // Dependências de outros scripts, como jQuery, se necessário
        null,    // Versão
        true     // Carrega no footer
    );

	//	FONTAWESOME
	wp_enqueue_style('Font Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), time(), 'all');

	//	VOLKHOV
	wp_enqueue_style(
		'google-fonts',
		'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'google-fonts-1',
		'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&display=swap',
		array(),
		null
	);

	//	ARQUIVOS COMPLEMENTARES

	//	Bootstrap
	// wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/bootstrap.min.css', array(), null, 'all');
	// wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/bootstrap.min.js', array(), null, true);

	//	Slick Carousel - https://kenwheeler.github.io/slick/ (Usado para fazer sliders/carrosséis)
	// wp_enqueue_style('slick-carousel', get_template_directory_uri() . '/vendor/slick-carousel/slick.min.css', array(), null, 'all');
	// wp_enqueue_script('slick-carousel', get_template_directory_uri() . '/vendor/slick-carousel/slick.min.js', array(), null, true);

	//	Animate - https://animate.style/ (Usado para chamar atenção para elementos pontuais, como inputs e notificações)
	//	wp_enqueue_style('animate', get_template_directory_uri() . '/vendor/animate/animate.min.css', array(), time(), 'all');

	//	ARQUIVOS DO PROJETO
	// wp_enqueue_style('labbotheme-header', get_template_directory_uri() . '/assets/css/header.css', array(), time(), 'all');
	//wp_enqueue_script('labbotheme-header', get_template_directory_uri() . '/assets/js/header.js', array('googleapis-jquery'), time(),  true);

	// wp_enqueue_style('labbotheme-footer', get_template_directory_uri() . '/assets/css/footer.css', array(), time(), 'all');
	//wp_enqueue_script('labbotheme-footer', get_template_directory_uri() . '/assets/js/footer.js', array('googleapis-jquery'), time(),  true);

	// Swiper CSS via CDN
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), '10.0.4', 'all');
    
    // Swiper JS via CDN
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), '10.0.4', true);

	wp_enqueue_style('labbo-style', get_template_directory_uri() . '/assets/css/afkdev.css', array(), time(), 'all');
	wp_enqueue_script('labbo-script', get_template_directory_uri() . '/assets/js/afkdev.js', array(), time(), true);

	$template_name = show_template();

	switch ($template_name) {
		case "home.php":
			load_script('inicio');
			load_style('inicio');
			break;
		default:
			echo '';
	}
}
add_action('wp_enqueue_scripts', 'labbo_scripts'); // add_action alternatives: wp_enqueue_scripts, get_footer


function register_menu(){
	register_nav_menus(
		array(
		  'menu-cabecalho' => 'Menu cabecalho',
		  'menu-rodape' => 'Menu rodape'
		)
	  );
}


add_action('after_setup_theme','register_menu');
