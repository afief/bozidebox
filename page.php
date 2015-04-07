<?php get_header(); ?>

<div class="single">
	<?php
	if ( has_post_thumbnail() ) {
		echo '<div class="singlethumbnail">';
		echo '<div class="wrapper">';
		echo '<div class="thumbnail">';
		the_post_thumbnail();
		echo '</div>';
		echo '</div>';
		echo '</div>';
	} 
	?>

	<div class="posts" id="posts">
		<div class="wrapper">
			<?php
			the_post();
			echo '<div class="post">';
			echo '<div class="wrapper">';
			get_template_part('box', get_post_type(get_the_ID()));
			echo '</div>';
			echo '<div class="comment"><a class="readmore" href="' . get_comments_link() . '">' . ((get_comments_number() > 0)?get_comments_number() . ' <i class="fa fa-comment"></i>':'<i class="fa fa-comment"></i>') . ' &nbsp; | &nbsp; Beri Komentar</a></div>';
			echo '</div>';
			?>
		</div>
	</div>

	<div class="commentwrapper">
		<?php comments_template(); ?>
	</div>
</div>

<?php get_footer(); ?>