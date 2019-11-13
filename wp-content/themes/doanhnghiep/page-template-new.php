<?php 
/*
Template Name: page-template-new
*/
get_header(); 
?>  
<div class="page-wrapper">
    <div class="container">
        <div class="g_content">
            <div class="row">
                <div class="col-sm-9">
                    <h3 class="title_top_archive">News</h3>
                    <div class="list_post_new_archive" >
                        <?php 
                        $list_post_arg = array(
                            'posts_per_page' => 3,
                            'orderby' => 'publish_date',
                            'order' => 'DESC',
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'cat' => 3
                        );
                        $list_post_q = new WP_Query();
                        $list_post_q->query($list_post_arg);
                        ?>
                        <?php 
                        while($list_post_q->have_posts()): $list_post_q->the_post();
                            get_template_part('includes/frontend/loop/loop_post');
                        endwhile;
                        ?>
                        <?php wp_reset_postdata();?>
                    </div>
                </div>
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
    </div>

    <!-- list_post_new_archive -->
</div>
</div><!-- container -->
</div>
<?php get_footer(); ?>

