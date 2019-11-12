<?php 
/*
Template Name: page-template-product
*/
get_header(); 
?>	
<div class="page-wrapper">
	<div class="container">
		<div class="g_content">
			<div class="wrap_list_idx">
				<?php    
                        $parent  = get_categories(array('parent'=>7));  // parent=>0 loop all
                        foreach ( $parent as $category ) {
                        	
                        	$args = array(
                        		'cat' => $category->term_id,
                        		'post_type' => 'post',
                        		'posts_per_page' => '5',
                        		'category__not_in' => array( 38 )
                        	);
                        	$query = new WP_Query( $args );
                        	
                        	if ( $query->have_posts() ) { ?>
                        		<div class="<?php echo $category->name; ?> listing">
                        			<?php  $catgory_id = get_cat_ID($category->name);
                        			$category_link = get_category_link( $catgory_id );
                        			?>
                        			<div class="list_subcat">
                        				<h2><span><?php echo $category->name; ?></span></h2>
                        				<ul>
                        					<?php echo do_shortcode("[list_catgory child_of=$catgory_id]") ?>
                        				</ul>
                        			</div>
                        			<ul class="list_post_category">
                        				<?php while ( $query->have_posts() ) {
                        					$query->the_post();
                        					?>
                        					<li id="post-<?php the_ID(); ?>" <?php //post_class( 'category-listing' ); ?> class="list_post_category_item pw">
                        						<div class="product_inner">
                        							<?php if ( has_post_thumbnail() ) { ?>
                        								<div class="wrap_thumb">
                        									<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
                        									<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"> 
                        										<a href="<?php the_permalink();?>"></a>
                        									</figure>
                        								</div>
                        							<?php } ?>
                        							<div class="post_wrap_content">
                        								<h2 class="post_title">
                        									<a href="<?php the_permalink(); ?>">
                        										<?php the_title(); ?>
                        									</a>
                        								</h2>
                        							</div>
                        						</div>
                        						
                        					</li>
                        				<?php } // end while ?>
                        			</ul>
                        		</div>
                     <?php } // end if
                        // Use reset to restore original query.
                     wp_reset_postdata();
                 }
                 ?>
             </div>
         </div>
     </div><!-- container -->
 </div>
 <?php get_footer(); ?>
