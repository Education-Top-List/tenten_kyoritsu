<?php 
/*
Template Name: page-template-new
*/
get_header(); 
?>  
<div class="page-wrapper">
    <div class="container">
        <div class="g_content">
                <div class="list_post_new_archive" >
                    <?php 
                    $list_post_arg = array(
                        'posts_per_page' => 20,
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
                <!-- list_post_new_archive -->
        </div>
    </div><!-- container -->
</div>
<?php get_footer(); ?>

