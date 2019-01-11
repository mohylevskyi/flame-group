<!DOCTYPE html>
<html>
<head>
 
  <meta charset="utf-8">
   <link rel="shortcut icon" href="/favicon.png" type="images/png">
  <meta name="viewport" content="width=device-width">
  <title>FlameGroup</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <?php wp_head();?>
</head>
<body <?php body_class();?>>
<header  class="header">
	<div class="logo">
		<a href="index.php">
			<?php the_custom_logo();?>
		</a>
	</div>
	
	
	<nav class="nav">
		<div class="menu-icon">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg>
		</div>
		<?php
			wp_nav_menu(array(
				'theme_location' => 'primary',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'menu_class' => 'menu',
				'menu_id' => '',
				'depth' => 2
			
			
			));
		
		
		?>
	
	</nav>
</header>