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
						<li><a href="#"><figure><img src="<?php echo BASE_URL; ?>/images/dt1.png"></figure></a></li>
						<li><a href="#"><figure><img src="<?php echo BASE_URL; ?>/images/dt2.png"></figure></a></li>
						<li><a href="#"><figure><img src="<?php echo BASE_URL; ?>/images/dt3.png"></figure></a></li>
						<li><a href="#"><figure><img src="<?php echo BASE_URL; ?>/images/dt4.png"></figure></a></li>
						<li><a href="#"><figure><img src="<?php echo BASE_URL; ?>/images/dt5.png"></figure></a></li>
						<li><a href="#"><figure><img src="<?php echo BASE_URL; ?>/images/dt6.png"></figure></a></li>
						<li><a href="#"><figure><img src="<?php echo BASE_URL; ?>/images/dt1.png"></figure></a></li>
					</ul>
				</div>
			</div>
			<div class="peoples_say">
				<div class="container">
					<h3 class="widget-title">What people say</h3>
					<ul>
						<li>
							<div class="cus_comment">
								<p>Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibuNulla vitae elit libero, a pharetra augue.</p>
							</div>
							<div class="cus_avatar">
								<figure><img src="<?php echo BASE_URL; ?>/images/men1.jpg"></figure>
								<div class="info_cus">
									<p>Alan Gordon</p>
									<span>Contractor</span>
								</div>
							</div>
						</li>
						<li>
							<div class="cus_comment">
								<p>Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibuNulla vitae elit libero, a pharetra augue.</p>
							</div>
							<div class="cus_avatar">
								<figure><img src="<?php echo BASE_URL; ?>/images/men2.jpg"></figure>
								<div class="info_cus">
									<p>Alan Gordon</p>
									<span>Contractor</span>
								</div>
							</div>
						</li>
						<li>
							<div class="cus_comment">
								<p>Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibuNulla vitae elit libero, a pharetra augue.</p>
							</div>
							<div class="cus_avatar">
								<figure><img src="<?php echo BASE_URL; ?>/images/men3.jpg"></figure>
								<div class="info_cus">
									<p>Alan Gordon</p>
									<span>Contractor</span>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>
