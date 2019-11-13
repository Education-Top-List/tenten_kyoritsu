<?php 
get_header(); 
?>	

<div id="wrap">
	<div class="g_content">		
		<div class="container">
			<div id="breadcrumb" class="breadcrumb">
				<ul>
					<?php  echo the_breadcrumb(); ?>
				</ul>
			</div> 
			<div class="row">
				<?php 
				wpb_set_post_views(get_the_ID());
				if(have_posts()) :
					while(have_posts()) : the_post(); ?>
						<div class="col-sm-9 <?php if(!in_category(3)){echo 'not_in_cat_new';} ?>">
							<article class="content_single_post">
								<?php if(in_category(3)){ ?>
								<div class="single_post_info">
									<div class="post_meta">
										<p><strong><?php the_time('d/m') ?></strong><span><?php the_time('Y'); ?></span></p>
									</div>
									<h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
								</div>
								<?php } ?>
								<div class="text_content">
									<?php  the_content(); ?>
								</div>
							</article>

						</div> 
					<?php endwhile;
				else:
				endif;
				wp_reset_postdata();
				?>
				<?php if(in_category(3)) { ?>
				<div class="col-sm-3">
					<h3 class="title_top_archive">More news Here </h3>
					<?php 
					$arg_cmt_post_q = array(
						'posts_per_page' => 6,
						'orderby' => 'post_date',
						'order' => 'DESC',
						'post_type' => 'post',
						'post_status' => 'publish',
						'cat' => array(3)
					);
					$cmt_post_q = new WP_Query();
					$cmt_post_q->query($arg_cmt_post_q);
					?>
					<?php if(have_posts()) : ?>
						<div class="news_sidebar">
							<ul>
								<?php
								while ($cmt_post_q->have_posts()) : $cmt_post_q->the_post(); ?>
									<li>
										<div class="post_cmt_wrapper pw">
											<div class="wrap_thumb">
												<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
												<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"> 
													<a href="<?php the_permalink();?>"></a>
												</figure>   
											</div>
											<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>  <a href="<?php the_permalink(); ?>"><?php if(get_locale() == 'en_US'){echo 'Read more >';} else { echo 'Xem thêm >';}  ?></a></h3>
										</div>
									</li>
								<?php endwhile; ?>
							<?php endif; ?> 
						</ul>
					</div>

				</div>
				<?php }?>
			</div>
			
		</div>
		
	</div>
</div>
<?php get_footer(); ?>
