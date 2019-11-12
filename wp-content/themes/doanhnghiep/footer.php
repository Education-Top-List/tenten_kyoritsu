<div class="scrolltop">
	<i class="fa fa-angle-up" aria-hidden="true"></i>	
</div>
<footer class="footer">
	        <?php
        $args = array(
          'post_type' => 'page',
          'post__in' => array(218) //list of page_ids
        );
        $page_query = new WP_Query( $args );
        if( $page_query->have_posts() ) :
        echo '<div class="pages-on-page">';
        //print any general title or any header here//
        while( $page_query->have_posts() ) : $page_query->the_post();
        echo '<div class="page-on-page" id="page_id-' . $post->ID . '">';
        echo the_content();
        echo '</div>';
        endwhile;
        echo '</div>';
        else:
        //optional text here is no pages found//
        endif;
        wp_reset_postdata();
        ?>
	<div class="copyright">
		<p>Copyright(C) Kyoritsu Electric (Vietnam) Co.,Ltd. All rights reserved.</p>
	</div>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo BASE_URL; ?>/js/wow.min.js"></script>
<script src="<?php echo BASE_URL; ?>/js/slick.js"></script>
<script src="<?php echo BASE_URL; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL; ?>/js/custom.js"></script>
</body>
</html>