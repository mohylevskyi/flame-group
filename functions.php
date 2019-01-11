<?php


function flamegroup_setup(){
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
	
	
	
	
	register_nav_menu('primary', 'Primary menu');
	
	
	
	
}
add_action('after_setup_theme', 'flamegroup_setup');






function flamegroup_scripts() {
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	wp_enqueue_style( 'media-css', get_template_directory_uri() . '/css/media.css' );
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'slicktheme-css', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'slicktheme-css', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Roboto' );
	
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js');
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/slider.js');
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js');
	wp_enqueue_script( 'cook', get_template_directory_uri() . '/jquery.cookie.js');
	if ( !is_admin() ) wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'flamegroup_scripts' );


 


add_action( 'wp_print_styles', 'my_deregister_styles', 100 );

function my_deregister_styles() {
	wp_deregister_style( 'wp-pagenavi' );
}









function blockwithus_register_post_type() {
    register_post_type('blockwithus', 
        array(
            'labels' => array(
                'name' => 'Блок Work with',
                'singular_name' => 'Блок Work with', // админ панель Добавить->Функцию
                'add_new' => 'Add Block Work with',
                'add_new_item' => 'Add new Block Work with', // заголовок тега <title>
                'edit_item' => 'Edit Block Work with',
                'new_item' => 'New Block Work with',
                'all_items' => 'All Block Work with',
                'view_item' => 'Block Work with on site',
                'menu_name' => 'Block Work with' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
      
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'blockwithus_register_post_type' ); // Использовать функцию только внутри хука init
	
function render_blockwithus(){


	$html .= '  <main class="main-index">';
    $params = array(
        'post_type' => 'blockwithus', // тип постов - записи
    );
    $query = new WP_Query($params);

    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
			$html .= '		<div class="index-text">';
			$html .= '			<h2>'. $fields['title_block'] .'</h2>';
			$html .= '			<p>'. $fields['description_block'] .'</p>';
			$html .= '			<div class="button">';
			$html .= '				<a href="about">'. $fields['buttontext_block'] .'<span>&mdash;<span></a>';
			$html .= '			</div>';
			$html .= '		</div>';
			$html .= '		<div class="index-link">';
			$html .= '			<a href="about/#t3" class="link">';
			$html .= '				<img src="http://flame-group.hostenko.com/wp-content/uploads/2018/09/time.png" alt="time">';
			$html .= '				<span> '. $fields['link1_block'] .'</span>  ';
			$html .= '				<img src="http://flame-group.hostenko.com/wp-content/uploads/2018/09/arrow-right.png" alt="arrow"  class="arrow">';
			$html .= '			</a>';
			$html .= '			<a href="about/#t4" class="link">';
			$html .= '				<img src="http://flame-group.hostenko.com/wp-content/uploads/2018/09/user.png" alt="user">';
			$html .= '				<span> '. $fields['link2_block'] .'</span>  ';
			$html .= '				<img src="http://flame-group.hostenko.com/wp-content/uploads/2018/09/arrow-right.png" alt="arrow"  class="arrow">';
			$html .= '			</a>';
			$html .= '			<a href="about/#t5" class="link">';
			$html .= '				<img src="http://flame-group.hostenko.com/wp-content/uploads/2018/09/chat.png" alt="chat">';
			$html .= '				<span> '. $fields['link3_block'] .'</span> ';
			$html .= '				<img src="http://flame-group.hostenko.com/wp-content/uploads/2018/09/arrow-right.png" alt="arrow"  class="arrow">';
			$html .= '			</a>';		
			$html .= '		</div>';
			$html .= '	</main>';	
			$html .= '		</div>';
			$html .= '	<div class="vac-index">';
			$html .= '	<div class="title-index-vac">';
			$html .= '<h2>'. $fields['some'] .'</h2>';
			$html .= '<a href="jobs">'. $fields['viewall'] .'</a>';
			$html .= '	</div>';			
    }
	
	
	
    wp_reset_postdata();

    echo $html;
}































function vacansies_register_post_type() {
    register_post_type('vacansies', 
        array(
            'labels' => array(
                'name' => 'Вакансии',
                'singular_name' => 'Вакансии', // админ панель Добавить->Функцию
                'add_new' => 'Add Vacansies',
                'add_new_item' => 'Add new Vacansies', // заголовок тега <title>
                'edit_item' => 'Edit Vacansies',
                'new_item' => 'New Vacansies',
                'all_items' => 'All Vacansies',
                'view_item' => 'Vacansies on site',
                'menu_name' => 'Vacansies' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
        
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'vacansies_register_post_type' ); // Использовать функцию только внутри хука init
	

function render_vacansies(){
  
	$html .= '<div class="grid">';
    $params = array(
        'post_type' => 'vacansies', // тип постов - записи
    );
    $query = new WP_Query($params);

    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
			$html .= '<div class="grid-column">';
			$html .= '<a id="go"><img src="'. $fields['image'][url] .'" alt=""></a>';
			$html .= '<h3>'.$fields['place'].'</h3>';
			$html .= '<p><h2><a id="go">'. $fields['title'] .'</a></h2></p>';
			$html .= '<p>'. $fields['description'] .'</p>';
			$html .= '</div>';
			
    }
   $html .= '</div>';

    wp_reset_postdata();

    echo $html;
}














function vacansiesText_register_post_type() {
    register_post_type('vacansiesText', 
        array(
            'labels' => array(
                'name' => 'Текст на стр Вакансии',
                'singular_name' => 'Текст на стр Вакансии', // админ панель Добавить->Функцию
                'add_new' => 'Add Vacansies Text',
                'add_new_item' => 'Add new Vacansies Text', // заголовок тега <title>
                'edit_item' => 'Edit Vacansies Text',
                'new_item' => 'New Vacansies Text',
                'all_items' => 'All Vacansies Text',
                'view_item' => 'Vacansies Text on site',
                'menu_name' => 'Vacansies Text' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'vacansiesText_register_post_type' ); // Использовать функцию только внутри хука init
	
function render_vacansiesText(){
  

	$html .= '<div class="text-vac">';
    $params = array(
        'post_type' => 'vacansiesText', // тип постов - записи
    );
    $query = new WP_Query($params);

    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
			$html .= '<h1>'. $fields['title_text'] .'</h1>';
			$html .= '<p>'. $fields['description_text'] .'</p>';
			
    }
   $html .= '</div>';

    wp_reset_postdata();

    echo $html;
}



function contact_register_post_type() {
    register_post_type('contact', 
        array(
            'labels' => array(
                'name' => 'Контакты',
                'singular_name' => 'Контакты', // админ панель Добавить->Функцию
                'add_new' => 'Add contact',
                'add_new_item' => 'Add new contact', // заголовок тега <title>
                'edit_item' => 'Edit contact',
                'new_item' => 'New contact',
                'all_items' => 'All contact',
                'view_item' => 'contact on site',
                'menu_name' => 'contact' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'contact_register_post_type' ); // Использовать функцию только внутри хука init
	
function render_contact(){
  


    $params = array(
        'post_type' => 'contact', // тип постов - записи
    );
    $query = new WP_Query($params);

    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
		
			
			$html .= '	<div class="text">';
			$html .= '		<h1>'. $fields['title_contact'] .'</h1>';
			$html .= '		<p>'. $fields['description_contact'] .'</p>';
			$html .= '	</div>';	
		
			
    }
  

    wp_reset_postdata();

    echo $html;
}


function contact2_register_post_type() {
    register_post_type('contact2', 
        array(
            'labels' => array(
                'name' => 'Контакты',
                'singular_name' => 'Контакты2', // админ панель Добавить->Функцию
                'add_new' => 'Add contact2',
                'add_new_item' => 'Add new contact2', // заголовок тега <title>
                'edit_item' => 'Edit contact2',
                'new_item' => 'New contact2',
                'all_items' => 'All contact2',
                'view_item' => 'contact on site2',
                'menu_name' => 'contact2' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'contact2_register_post_type' ); // Использовать функцию только внутри хука init
	
function render_contact2(){
  


    $params = array(
        'post_type' => 'contact2', // тип постов - записи
    );
    $query = new WP_Query($params);

    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
		

		
			$html .= '		<div class="inform">';
			$html .= '			<div>';
			$html .= '				<img src="http://flame-group.hostenko.com/wp-content/uploads/2018/09/placeholder.png" alt="">';
			$html .= '				<div class="osn">'. $fields['osn'] .'</div>';
			$html .= '			</div>';
			$html .= '			<div class="inform-2">';
			$html .= '				<img src="http://flame-group.hostenko.com/wp-content/uploads/2018/09/email.png" alt="">';
			$html .= '				<div class="e-m">'. $fields['mail'] .'</div>';
			$html .= '				<img src="http://flame-group.hostenko.com/wp-content/uploads/2018/09/telephone.png" alt="">';
			$html .= '				<div class="e-m">'. $fields['tel1'] .'<p>'. $fields['tel2'] .'</p>Viber WhatsApp</div>';
			$html .= '			</div>';
			$html .= '		</div>	';
			$html .= '	</div>';
			
    }

    wp_reset_postdata();

    echo $html;
}



	
function footer_register_post_type() {
    register_post_type('footer', 
        array(
            'labels' => array(
                'name' => 'Футер',
                'singular_name' => 'Футер', // админ панель Добавить->Функцию
                'add_new' => 'Add footer',
                'add_new_item' => 'Add new footer', // заголовок тега <title>
                'edit_item' => 'Edit footer',
                'new_item' => 'New footer',
                'all_items' => 'All footer',
                'view_item' => 'Footer',
                'menu_name' => 'Footer' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'footer_register_post_type' ); // Использовать функцию только внутри хука init
	
function render_footer(){

    $params = array(
        'post_type' => 'footer', // тип постов - записи
    );
    $query = new WP_Query($params);

    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
				$html .= '<div>';
				$html .= '	<ul class="left-peace">';
				$html .= '		<li><a href="privacy">'. $fields['privacy'] .'</a></li>';
				$html .= '		<li><a href="terms">'. $fields['terms'] .'</a></li>';
				$html .= '		<li><a href="cookie">'. $fields['cookie'] .'</a></li>';
				$html .= '	</ul>';
				$html .= '</div>';
				$html .= '	<div class="right-peace">';
				$html .= '		<ul>';
				$html .= '			<li><a href="#"><img src="'. $fields['img1'][url] .'" alt="vk"></a></li>';
				$html .= '			<li><a href="#"><img src="'. $fields['img2'][url] .'" alt="fb"></a></li>';
				$html .= '			<li><a href="#"><img src="'. $fields['img3'][url] .'" alt="instagram"></a></li>';
				$html .= '		</ul>';
				$html .= '	</div>';
					
		}
	
	
	

    wp_reset_postdata();

    echo $html;
}
	



	
function aboutLearn_register_post_type() {
    register_post_type('aboutLearn', 
        array(
            'labels' => array(
                'name' => 'About блок1',
                'singular_name' => 'About блок1', // админ панель Добавить->Функцию
                'add_new' => 'Add aboutLearn',
                'add_new_item' => 'Add new aboutLearn', // заголовок тега <title>
                'edit_item' => 'Edit aboutLearn',
                'new_item' => 'New aboutLearn',
                'all_items' => 'All aboutLearn',
                'view_item' => 'aboutLearn on site',
                'menu_name' => 'aboutLearn' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
        
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'aboutLearn_register_post_type' ); // Использовать функцию только внутри хука init
	

function render_aboutLearn(){
  
	$html .= '<div class="learn" id="t0">';
    $params = array(
        'post_type' => 'aboutLearn', // тип постов - записи
    );
    $query = new WP_Query($params);

    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
			$html .= '<h2>'. $fields['title'] .'</h2>';
			$html .= '	<div class="cent">';
			$html .= '		<p> '. $fields['description'] .'</p>';
			$html .= '		<ul>';
			$html .= '		<p>'. $fields['jump'] .'</p>';
			$html .= '		<li><a href="#t3">'. $fields['t1'] .'</a></li>';
			$html .= '		<li><a href="#t4">'. $fields['t2'] .'</a></li>';
			$html .= '		<li><a href="#t5">'. $fields['t3'] .'</a></li>';
			$html .= '	</ul>';
			$html .= '</div>';
			
    }
   $html .= '</div>';

    wp_reset_postdata();

    echo $html;
}


function aboutUs_register_post_type() {
    register_post_type('aboutUs', 
        array(
            'labels' => array(
                'name' => 'About блок2',
                'singular_name' => 'About блок2', // админ панель Добавить->Функцию
                'add_new' => 'Add aboutUs',
                'add_new_item' => 'Add new aboutUs', // заголовок тега <title>
                'edit_item' => 'Edit aboutUs',
                'new_item' => 'New aboutUs',
                'all_items' => 'All aboutUs',
                'view_item' => 'aboutUs on site',
                'menu_name' => 'aboutUs' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
        
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'aboutUs_register_post_type' ); // Использовать функцию только внутри хука init
	

function render_aboutUs(){
  
	$html .= '<div class="about">';
    $params = array(
        'post_type' => 'aboutUs', // тип постов - записи
    );
    $query = new WP_Query($params);

    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
			$html .= '	<h2>'. $fields['title'] .'</h2>';
			$html .= '	<div class="cent">';
			$html .= '		<p class="mar">'. $fields['description'] .'</p>';
			$html .= '	</div>';
			
    }
   $html .= '</div>';

    wp_reset_postdata();

    echo $html;
}
		
		
		
		
/*function aboutTeam_register_post_type() {
    register_post_type('aboutTeam', 
        array(
            'labels' => array(
                'name' => 'About блок3',
                'singular_name' => 'About блок3', // админ панель Добавить->Функцию
                'add_new' => 'Add aboutTeam',
                'add_new_item' => 'Add new aboutTeam', // заголовок тега <title>
                'edit_item' => 'Edit aboutTeam',
                'new_item' => 'New aboutTeam',
                'all_items' => 'All aboutTeam',
                'view_item' => 'aboutTeam on site',
                'menu_name' => 'aboutTeam' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
        
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'aboutTeam_register_post_type' ); // Использовать функцию только внутри хука init
	

function render_aboutTeam(){
  
	$html .= '<div class="our" id="t2">';
    $params = array(
        'post_type' => 'aboutTeam', // тип постов - записи
    );
    $query = new WP_Query($params);

    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
			$html .= '<h2>'. $fields['title'] .'</h2>';
			$html .= '<div class="cent">';
			$html .= '	<p>'. $fields['description'] .'</p>';
			$html .= '	<div class="flex">';
			$html .= '		<div class="imglol">';
			$html .= '			<img src="'. $fields['image1'][url] .'" alt="">';
			$html .= '			<h3>'. $fields['name1'] .'</h3>';
			$html .= '			<p>'. $fields['position1'] .'</p>';
			$html .= '		</div>';
			$html .= '		<div class="imglol">';
			$html .= '			<img src="'. $fields['image2'][url] .'" alt="">';
			$html .= '			<h3>'. $fields['name2'] .'</h3>';
			$html .= '			<p>'. $fields['position2'] .'</p>';
			$html .= '		</div>';
			$html .= '		<div  class="imglol">';
			$html .= '			<img src="'. $fields['image3'][url] .'" alt="">';
			$html .= '			<h3>'. $fields['name3'] .'</h3>';
			$html .= '			<p>'. $fields['position3'] .'</p>';
			$html .= '		</div>';
			$html .= '	</div>';
			$html .= '</div>';
			
    }
   $html .= '</div>';

    wp_reset_postdata();

    echo $html;
}
		
	
	
			
	








function aboutGallery_register_post_type() {
    register_post_type('aboutGallery', 
        array(
            'labels' => array(
                'name' => 'About блок4',
                'singular_name' => 'About блок4', // админ панель Добавить->Функцию
                'add_new' => 'Add aboutGallery',
                'add_new_item' => 'Add new aboutGallery', // заголовок тега <title>
                'edit_item' => 'Edit aboutGallery',
                'new_item' => 'New aboutGallery',
                'all_items' => 'All aboutGallery',
                'view_item' => 'aboutGallery on site',
                'menu_name' => 'aboutGallery' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
        
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'aboutGallery_register_post_type' ); // Использовать функцию только внутри хука init
	

function render_aboutGallery(){
  
	$html .= '<div class="gallery" id="t3">';
    $params = array(
        'post_type' => 'aboutGallery', // тип постов - записи
    );
    $query = new WP_Query($params);

    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
			$html .= '	<h2>'. $fields['title'] .'</h2>';
			$html .= '	<div class="cent">';
			$html .= '		<p>'. $fields['description'] .'</p>';
			$html .= '	</div>';
			
    }
   $html .= '</div>';

    wp_reset_postdata();

    echo $html;
}

*/


function aboutEmpl_register_post_type() {
    register_post_type('aboutEmpl', 
        array(
            'labels' => array(
                'name' => 'About блок5',
                'singular_name' => 'About блок5', // админ панель Добавить->Функцию
                'add_new' => 'Add aboutEmpl',
                'add_new_item' => 'Add new aboutEmpl', // заголовок тега <title>
                'edit_item' => 'Edit aboutEmpl',
                'new_item' => 'New aboutEmpl',
                'all_items' => 'All aboutEmpl',
                'view_item' => 'aboutEmpl on site',
                'menu_name' => 'aboutEmpl' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
        
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'aboutEmpl_register_post_type' ); // Использовать функцию только внутри хука init
	

function render_aboutEmpl(){
  

    $params = array(
        'post_type' => 'aboutEmpl', // тип постов - записи
    );
    $query = new WP_Query($params);

    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
			$html .= '<div class="empl" >';
			$html .= '<h2>'. $fields['title'] .'</h2>';
			$html .= '<div class="cent">';
			$html .= '	<p>'. $fields['description'] .'</p>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '	<div class="people" id="t5">';
			$html .= '	<h2>'. $fields['title_what'] .'</h2>';
    }
   

    wp_reset_postdata();

    echo $html;
}

function aboutWorkers_register_post_type() {
    register_post_type('aboutWorkers', 
        array(
            'labels' => array(
                'name' => 'About блок5',
                'singular_name' => 'About блок5', // админ панель Добавить->Функцию
                'add_new' => 'Add aboutWorkers',
                'add_new_item' => 'Add new aboutWorkers', // заголовок тега <title>
                'edit_item' => 'Edit aboutWorkers',
                'new_item' => 'New aboutWorkers',
                'all_items' => 'All aboutWorkers',
                'view_item' => 'aboutWorkers on site',
                'menu_name' => 'aboutWorkers' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
        
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'aboutWorkers_register_post_type' ); // Использовать функцию только внутри хука init
	
function render_aboutWorkers(){
  

    $params = array(
        'post_type' => 'aboutWorkers', // тип постов - записи
    );
    $query = new WP_Query($params);

    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
			$html .= '<div class="empl" >';
			$html .= '<h2>'. $fields['title'] .'</h2>';
			$html .= '<div class="cent">';
			$html .= '	<p>'. $fields['description'] .'</p>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '	<div class="people" id="t5">';
			$html .= '	<h2>'. $fields['title_what'] .'</h2>';
    }
   

    wp_reset_postdata();

    echo $html;
}
	
	
/*function bottomSlider_register_post_type() {
    register_post_type('bottomSlider', 
        array(
            'labels' => array(
                'name' => 'About слайдер нижний',
                'singular_name' => 'About слайдер нижний', // админ панель Добавить->Функцию
                'add_new' => 'Add bottomSlider',
                'add_new_item' => 'Add new bottomSlider', // заголовок тега <title>
                'edit_item' => 'Edit bottomSlider',
                'new_item' => 'New bottomSlider',
                'all_items' => 'All bottomSlider',
                'view_item' => 'bottomSlider on site',
                'menu_name' => 'bottomSlider' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
        
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'bottomSlider_register_post_type' ); // Использовать функцию только внутри хука init
	

function render_bottomSlider(){
  

    $params = array(
        'post_type' => 'bottomSlider', // тип постов - записи
    );
    $query = new WP_Query($params);

    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
			$html .= '<div class="what-slide">';
			$html .= '<div>';
			$html .= '<div class="what-img">';
			$html .= '<img src="'. $fields['comment_face'][url] .'" alt="face">';
			$html .= '</div>';
			$html .= '<div class="what-text">';
			$html .= '<p>'. $fields['comment_name'][url] .'</p>';
			$html .= '<span>'. $fields['comment'] .'</span>';
			$html .= '</div>			';
			$html .= '	</div>';
			$html .= '</div>';
    }
   

    wp_reset_postdata();

    echo $html;
}
	

function topSlider_register_post_type() {
    register_post_type('topSlider', 
        array(
            'labels' => array(
                'name' => 'About слайдер Галерея',
                'singular_name' => 'About слайдер Галерея', // админ панель Добавить->Функцию
                'add_new' => 'Add topSlider',
                'add_new_item' => 'Add new topSlider', // заголовок тега <title>
                'edit_item' => 'Edit topSlider',
                'new_item' => 'New topSlider',
                'all_items' => 'All topSlider',
                'view_item' => 'topSlider on site',
                'menu_name' => 'topSlider' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
        
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'topSlider_register_post_type' ); // Использовать функцию только внутри хука init
	

function render_topSlider(){
  

    $params = array(
        'post_type' => 'topSlider', // тип постов - записи
    );
    $query = new WP_Query($params);

    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
		$html .= '<div><img src="'. $fields['slide'][url] .'"></div>';
    }
   

    wp_reset_postdata();

    echo $html;
	}
	
	
*/	
	function aboutText_register_post_type() {
    register_post_type('aboutText', 
        array(
            'labels' => array(
                'name' => 'About Текст',
                'singular_name' => 'About Текст', // админ панель Добавить->Функцию
                'add_new' => 'Add aboutText',
                'add_new_item' => 'Add new aboutText', // заголовок тега <title>
                'edit_item' => 'Edit aboutText',
                'new_item' => 'New aboutText',
                'all_items' => 'All aboutText',
                'view_item' => 'aboutText on site',
                'menu_name' => 'aboutText' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
        
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'aboutText_register_post_type' ); // Использовать функцию только внутри хука init
	

function render_aboutText(){
  

    $params = array(
        'post_type' => 'aboutText', // тип постов - записи
    );
	
		$html .= '<div class="bg-about">';
    $query = new WP_Query($params);


    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
		
		$html .= '	<div class="bg-img-text">';
		$html .= '		<h2>'. $fields['title'] .'</h2>';
		$html .= '	</div>';
		$html .= '	<div class="bg-img-link">';
		$html .= '		<a href="#t0">'. $fields['scroll'] .'</a>';
		$html .= '	</div>';
    }
   
	$html .= '</div>';
    wp_reset_postdata();

    echo $html;
	}

	
function indexSlider_register_post_type() {
    register_post_type('indexSlider', 
        array(
            'labels' => array(
                'name' => 'Главный слайдер',
                'singular_name' => 'Главный слайдер', // админ панель Добавить->Функцию
                'add_new' => 'Add indexSlider',
                'add_new_item' => 'Add new indexSlider', // заголовок тега <title>
                'edit_item' => 'Edit indexSlider',
                'new_item' => 'New indexSlider',
                'all_items' => 'All indexSlider',
                'view_item' => 'indexSlider on site',
                'menu_name' => 'indexSlider' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
        
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'indexSlider_register_post_type' ); // Использовать функцию только внутри хука init
	

function render_indexSlider(){
  

    $params = array(
        'post_type' => 'indexSlider', // тип постов - записи
    );
    $query = new WP_Query($params);

	
    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
		
			$html .= '<li class="slide showing">';
			$html .= '	<img src="'. $fields['img1'][url] .'">	';
			$html .= '</li>';
			$html .= '<li class="slide">';
			$html .= '	<img src="'. $fields['img2'][url] .'">';
			$html .= '</li>';
			$html .= '<li class="slide">';
			$html .= '	<img src="'. $fields['img3'][url] .'">';
			$html .= '</li>';
			$html .= '<li class="slide">';
			$html .= '	<img src="'. $fields['img4'][url] .'">';
			$html .= '</li>';
			$html .= '<li class="slide">';
			$html .= '	<img src="'. $fields['img5'][url] .'">';
			$html .= '</li>	';
    }
   
	
    wp_reset_postdata();

    echo $html;
	}
	
function indexText_register_post_type() {
    register_post_type('indexText', 
        array(
            'labels' => array(
                'name' => 'Текст Индекс',
                'singular_name' => 'Текст Индекс', // админ панель Добавить->Функцию
                'add_new' => 'Add indexText',
                'add_new_item' => 'Add new indexText', // заголовок тега <title>
                'edit_item' => 'Edit indexText',
                'new_item' => 'New indexText',
                'all_items' => 'All indexText',
                'view_item' => 'indexText on site',
                'menu_name' => 'indexText' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
        
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'indexText_register_post_type' ); // Использовать функцию только внутри хука init
	

function render_indexText(){
  

    $params = array(
        'post_type' => 'indexText', // тип постов - записи
    );
	
	$html .= '<div class="fixed-text">';
    $query = new WP_Query($params);

	
    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
		
			
			$html .= '	<h3>'. $fields['title'] .'</h3>';
			$html .= '	<p>'. $fields['description'] .'</p>';
			
    }
   $html .= '</div>';
	
    wp_reset_postdata();

    echo $html;
	}	
			
	
	
	
	
	
	
	
	
	
	
	
	
	
?>