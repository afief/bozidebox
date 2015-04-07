<?php get_header(); ?>

<div class="posts searchresult" id="posts">
	<div class="wrapper">
	<h2>Hasil Pencarian `<?=get_search_query();?>`</h2>
    <?php

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

<?php get_footer(); ?>