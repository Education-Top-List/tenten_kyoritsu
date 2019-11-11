<?php 
/*
Template Name: page-template-gioithieu
*/
get_header(); 
?>	
<div class="page-wrapper">
	<div class="container">
		<div class="g_content">
			<?php 
			$content_post = get_post($my_postid);
			$content = $content_post->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]&gt;', $content);
			echo $content;
			?>
		</div>
	</div><!-- container -->
</div>
<?php get_footer(); ?>
