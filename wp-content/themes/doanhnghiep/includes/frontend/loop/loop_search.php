<li class="col-sm-4 pw">
	<div class="post_cmt_wrapper">
		<div class="wrap_thumb">
			<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
			<figure class="thumbnail" > 
				<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
			</figure>	
		</div>
		<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> </h3>

	</div>

</li>