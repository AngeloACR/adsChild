<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 11 );


add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
	?>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<?php
}

add_action('wp_footer', 'myPag');

function myPag() {
	?>
	<script>

		var pags = document.getElementsByClassName("pagination");
		console.log(pags);
		for(let pag of pags){

			var right = pag.firstElementChild;
			var left = pag.lastElementChild;

			if(right.childNodes.length != 1){
				right.style.display ="none !important";
			} else{
				right.style.display ="block";			
			}

			if(left.childNodes.length != 1){
				left.style.display ="none !important";
			} else{
				left.style.display ="block";			
			}

		}
	
	</script>
	<?php
}

include_once('adsshorts.php');
