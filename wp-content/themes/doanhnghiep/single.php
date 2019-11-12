<?php 
get_header(); 
?>	
<div id="wrap">
	<?php 
		// Get the current category ID, e.g. if we're on a category archive page
	$postcat = get_the_category( $post->ID );
		//var_dump($postcat);
	?>
	<div class="g_content ">
		<div class="container">
			<?php 	
			$my_postid = 18 ;
			$content_post = get_post($my_postid);
			$content = $content_post->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]&gt;', $content);
			echo $content;
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
