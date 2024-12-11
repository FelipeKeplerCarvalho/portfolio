<?php /* Template name: Home*/;?>


<?php get_header(); ?>

<?php 

$infos = CTR_home::get_info();

global $infos;
?>

<?php get_template_part('/parts/home/hero'); ?>
<?php get_template_part('/parts/home/category'); ?>
<?php get_template_part('/parts/home/destiny'); ?>
<?php get_template_part('/parts/home/topics'); ?>
<?php get_template_part('/parts/home/testimonials');?>
<?php get_template_part('/parts/home/companys');?>
<?php get_template_part('/parts/home/news_form');?>

<?php get_footer() ; ?>