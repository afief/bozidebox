<?php

include "functions/walker.php";
include "functions/comment_walker.php";


function tembang_setup() {
	add_theme_support( 'post-thumbnails' );
	
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'tembang' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'tembang' ),
	));
}
add_action( 'after_setup_theme', 'tembang_setup' );

function boxidebox_comment($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
  
}

function google_analytics() {
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47249478-1', 'afief.net');
  ga('send', 'pageview');

</script>
<?php
}
add_action("wp_head",  google_analytics);

?>