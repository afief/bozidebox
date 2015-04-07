<?php
echo '<div class="outerbox">';
	echo '<div class="icontype">';
		echo '<i class="fa fa-file-o"></i>';
	echo '</div>';
	echo '<div class="date">';
		the_date('d M Y');
	echo '</div>';
echo '</div>';

if ( has_post_thumbnail() && !is_single() ) {
	echo '<div class="thumbnail">';
		the_post_thumbnail();
	echo '</div>';
} 

echo "<h2 class='title'><a href='" . get_permalink() . "'>" . get_the_title() . "</a></h2>";
echo "<div class='content'>";
	the_content();	
echo "</div>";

?>