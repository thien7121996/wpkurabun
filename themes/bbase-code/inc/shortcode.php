<?php 
add_shortcode('year', 'year_shortcode');
function year_shortcode(){
	return date('Y');
}

add_shortcode('social_link', 'social_link');
function social_link(){
	$social_media = get_field('social_media', 'option');

	ob_start();
	if($social_media): ?>

	<ul class="list-social">
		<?php foreach ($social_media as $social) {?>
			<li class="<?php echo $social['social'] ?>"><a href="<?php echo $social['url']; ?>"><?php echo $social['font_awesome_icon']; ?></a></li>
		<?php } ?>
	</ul>
<?php 
	endif;

	$output = ob_get_contents();
	ob_end_clean();

	return $output;
}