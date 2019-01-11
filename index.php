<?php 
/**
	Template Name: Home
*/
?>

<?php get_header();?>

<div class="wrapp-slider" id="slideTwo">
	<div class="sliderPosition">
		<ul id="slides">
		<?php render_indexSlider(); ?>
		</ul>
		<?php render_indexText(); ?>
		<div class="control">
			<a class="controls prev" id="previous" onclick="previousSlide();"><img src="<?php echo get_template_directory_uri(); ?>/images/left.png" alt=""></a>
			<a class="controls next" id="next" onclick="nextSlide();"><img src="<?php echo get_template_directory_uri(); ?>/images/right-index.png" alt=""></a>		
		</div>
		
	</div>	
	<div class="number">
		<p><a class="contr active" onclick="goToSlide(0);" >01</a></p>
		<p><a class="contr" onclick="goToSlide(1);">02</a></p>
		<p><a class="contr"onclick="goToSlide(2);" >03</a></p>
		<p><a  class="contr" onclick="goToSlide(3);">04</a></p>
		<p><a  class="contr" onclick="goToSlide(4);">05</a></p>
	</div>
</div>


<div class="wrapper-index">
	<?php render_blockwithus(); ?>


		<?php
		$args = array(
				'posts_per_page' => '3',
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
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
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

</div>
	
<div id="bg_popup">
  <div id="popup">
 <div class="bottom-line">
	<a class="close" href="#"><img src="http://flame-group.com/wp-content/uploads/2018/09/nole.png"></a>
	<h1>Dear Users</h1>
 </div>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Ut varius tincidunt libero. Phasellus dolor. Maecenas vestibulum mollis</p>
<a  id="setCookie" class="close-yes" href="#" title="Закрыть" onclick="document.getElementById('bg_popup').style.display='none'; return false;">Akceptuję</a>
</div>
</div>

<script>


var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var chislo = document.querySelectorAll('.contr');
var slideInterval = setInterval(nextSlide,5000);
console.log(slides);
console.log(currentSlide);
console.log(chislo);

function nextSlide() {
 goToSlide(currentSlide +1);
}

function previousSlide() {
 goToSlide(currentSlide -1);
}

function goToSlide(n) {
 slides[currentSlide].className = 'slide';
 currentSlide = (n+slides.length)%slides.length;
 slides[currentSlide].className = 'slide showing';	
 if (chislo[currentSlide] = currentSlide){
 chislo[1].className = 'contr';
  chislo[2].className = 'contr';
  chislo[3].className = 'contr';
  chislo[4].className = 'contr';
  chislo[0].className = 'contr';
  chislo[currentSlide].className = 'contr active';  
 }else if(chislo[currentSlide] == 0){
    console.log(chislo[currentSlide]);
  chislo[1].className = 'contr';
  chislo[2].className = 'contr';
  chislo[3].className = 'contr';
  chislo[4].className = 'contr';
  chislo[0].className = 'contr active';
 }
}





</script>
<?php get_footer();?>