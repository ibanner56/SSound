<?php

// This next bit gets us our nice 2 posts-per-slider thing, instead of 3, which was obnoxious.

wp_dequeue_script( 'recent-posts' );
wp_deregister_script( 'recent-posts' );
wp_register_script( 'recent-posts', get_stylesheet_directory_uri() . '/includes/js/recent-posts.js', array( 'jquery' , 'flexslider' ) );
wp_enqueue_script( 'recent-posts');

?>