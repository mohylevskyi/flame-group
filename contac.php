<?php 
/**
	Template Name: Vvv
*/
?>

<?php get_header();?>

<div class="wrapper">
<main id="main-contact">
	<?php render_contact();?>
	<?php echo do_shortcode('[contact-form-7 id="85" title="Форма на странице контакты"]'); ?>
	<?php render_contact2();?>
</main>
</div>

<?php get_footer();?>