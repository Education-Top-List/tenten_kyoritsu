<?php 
/*
Template Name: page-template-trangchu
*/
get_header(); 
?>	
<div class="page-wrapper">
	<div id="content">
		<div class="g_content">
			<?php 
			$content_post = get_post($my_postid);
			$content = $content_post->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]&gt;', $content);
			echo $content;
			?>	
			<div class="list_logo">
				<div class="container">
					<ul>
						<?php
						$args = array(  
							'post_type' => 'partners',
							'post_status' => 'publish',
							'orderby' => 'title', 
							'order' => 'ASC'
						);

						$loop_partner = new WP_Query( $args ); 

						while ( $loop_partner->have_posts() ) : $loop_partner->the_post(); 
    	//echo the_title();
							?> <li class="pw"> <figure class="thumbnail"> <a href="<?php echo get_the_excerpt(); ?>" target="_blank"><?php the_post_thumbnail();?></a> </figure> </li> <?php
						endwhile;
						wp_reset_postdata(); 
						?>
					</ul>
				</div>
			</div>

			

			<div class="peoples_say">
				<div class="container">
					<h3 class="widget-title">What people say</h3>
					<ul>
				<?php
				$args = array(  
					'post_type' => 'peoplesays',
					'post_status' => 'publish',
					'orderby' => 'title', 
					'order' => 'ASC'
				);

				$loop_partner = new WP_Query( $args ); 
				while ( $loop_partner->have_posts() ) : $loop_partner->the_post(); 
					?> 
					<li>
						<div class="cus_comment">
							<p><?php echo get_the_excerpt();?></p>
						</div>
						<div class="cus_avatar">
							<figure><?php the_post_thumbnail();?></figure>
							<div class="info_cus">
								<p><?php the_title(); ?></p>
								<span><?php echo get_post_meta( $post->ID, '_inputjob', true ); ?></span>
							</div>
						</div>
					</li>
					<?php
				endwhile;
				wp_reset_postdata(); 
				?>
			</ul>
				</div>
			</div>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>
