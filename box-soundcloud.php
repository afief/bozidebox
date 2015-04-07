<?php
$sc_url = get_post_meta( $post->ID, 'soundcloud_url', true );

echo '<div class="outerbox">';
	echo '<div class="icontype">';
		echo '<i class="fa fa-soundcloud"></i>';
	echo '</div>';
	echo '<div class="date">';
		the_date('d M Y');
	echo '</div>';
echo '</div>';

echo "<h2 class='title'><a href='" . get_permalink() . "'>" . get_the_title() . "</a></h2>";

?>

<iframe id="sc-widget" src="https://w.soundcloud.com/player/?url=<?= esc_attr($sc_url) ?>" width="100%" height="160" scrolling="no" frameborder="no"></iframe>

<?php

echo "<div class='content'>";
	the_content();	
echo "</div>";

?>