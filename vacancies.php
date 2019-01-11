<?php 
/**
	Template Name: Vac
*/
?>

<?php get_header();?>



<div class="wrapper">
	<main class="main-vac">
		<?php render_vacansiesText();?>
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
				'paged' => $paged,
				'posts_per_page' => '12',
       			'post_type' => 'vacansies', // тип постов - записи
   				);
		$query = new WP_Query($args);
		?>
		<div class="grid">
		<?php if ( $query->have_posts() ) : ?>
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php $fields = get_fields( get_the_ID() ); ?>
			<div class="grid-column">
				<a href="#<?php echo get_the_ID(); ?>" class="open_modal"><!-- get_the_ID() - id поста для модалки --> 
				<img src="<?php echo $fields['image']['url'] ?>" alt=""></a>
				<h3><?php echo $fields['place'] ?></h3>
				<p><h2><a href="#<?php echo get_the_ID(); ?>" class="open_modal"><!-- get_the_ID() - id поста для модалки --> 
				<?php echo $fields['title'] ?></a></h2></p>
				<p><?php echo $fields['description'] ?></p>
			</div>
		<?php endwhile;?>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		</div>
		<?php wp_pagenavi( array( 'query' => $query ) );?>
			
			
	
	</main>
</div>	
​
<?php if ( $query->have_posts() ) : ?>
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php $fields = get_fields( get_the_ID() ); ?>
			<div id="<?php echo get_the_ID(); ?>" class="modal_div"><!-- get_the_ID() - id поста для модалки --> 
	   			<span class="modal_close">X</span> <!-- Кнoпкa зaкрыть --> 
	  			<div class="modal-img">
					<img src="<?php echo $fields['image']['url'] ?>" alt="">
				</div>
				<div class="modal-descrip">
					<div class="modal-info">
						<h3><?php echo $fields['place'] ?></h3>
						<h2><?php echo $fields['title'] ?></h2>
						<p>For detail info call on the number down bellow or press button to sent message and we will answear you via email.</p>
						<strong><img src="images/telephone.png" width="12px" height="12px">+48 577-072-352, +48 577-072-604 Viber WhatsApp</strong>
						<div class="button-contact btn"><a href="contac">sent message</a></div>
					</div>
					<div class="modal-text">
						<p>
							<?php echo $fields['description'] ?>
						</p>	
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
<?php endif; ?>
<div id="overlay"></div>





<?php get_footer();?>