<?php get_header(); ?>

<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3">White Papers</h2>
				</div>
				<p class="">Review our library of white papers, covering subjects for researchers in rich technical detail.</p>
			</div>
		</div>
	</div>
</section>

<section  class="white-paper-sect py-5 clearfix">
	<div class="container py-md-4">
		<div class="row g-4 justify-content-left clearfix">		
        <?php while ( have_posts() ) : the_post(); ?>
			<div class="col-md-6 wow fadeInLeft" data-wow-delay=".1s">
				<div class="ic-block bg-f8 welcome-p br-0 shadow-none">
					<div class="row g-0 justify-content-center">
						<div class="col-md-4">
							<div class="ic-img bg-f8"><img src="<?php echo get_field("icon"); ?>" class="img-fluid"></div>
						</div>
						<div class="col-md-8 link-down pb-5 p-4">
							<div class="section-title">
								<h4 class="text-uppercase"><?php echo the_title(); ?></h4>
							</div>
							<p class="pb-2"><?php echo get_the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="link">Continue Reading <i class="fas fa-long-arrow-right ms-2"></i></a>
						</div>
					</div>
				</div>
			</div>
        <?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>