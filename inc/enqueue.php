<?php

 
 /**
  * Enqueue scripts and styles for the front end.
  */
 function dcsEnqueue_scripts() {
	$plugin_url = plugin_dir_url( __FILE__ );
	wp_enqueue_style( 'dcsLoadMorePostsStyle',$plugin_url. '../js/style.css');
	 wp_enqueue_script( 'dcsLoadMorePostsScript',$plugin_url. '../js/loadmoreposts.js', array( 'jquery' ), '20131205', true );
	 wp_localize_script( 'dcsLoadMorePostsScript', 'dcs_frontend_ajax_object',
		 array( 
			 'ajaxurl' => admin_url( 'admin-ajax.php' )
		 )
	 );
 }
 add_action( 'wp_enqueue_scripts', 'dcsEnqueue_scripts' );
 