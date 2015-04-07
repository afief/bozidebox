<header>
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
</header>

<div class="posts" id="posts">
	<div class="wrapper">
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts( array( 'post_type' => array( 'post', 'soundcloud' ), 'paged' => $paged));
		if ( have_posts() ) :
			while(have_posts()) {
				the_post();
				echo '<div class="post">';
					echo '<div class="wrapper">';
						get_template_part('box', get_post_type(get_the_ID()));
					echo '</div>';
					echo '<div class="comment"><a class="readmore" href="' . get_comments_link() . '">' . ((get_comments_number() > 0)?get_comments_number() . ' <i class="fa fa-comment"></i>':'<i class="fa fa-comment"></i>') . ' &nbsp; | &nbsp; Beri Komentar</a></div>';
				echo '</div>';
			}
		endif;
		?>
	</div>
</div>