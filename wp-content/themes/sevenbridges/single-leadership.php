<?php get_header(); ?>

<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-10 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3"><?php echo the_title(); ?></h2>
				</div>
				<p class=""><?php echo get_field('position'); ?></p>
			</div>
		</div>
	</div>
</section>

<section  class="blogs-sect py-5 clearfix">
	<div class="container py-md-4">
		<div class="row g-4">
			<div class="col-md-6 wow fadeInLeft animated" data-wow-delay=".1s">
				<a href="<?php echo get_post_type_archive_link( 'leadership' ); ?>" class="link"><i class="fas fa-long-arrow-left me-2"></i>Back to Team </a>

				<div class="section-title pt-4">
					<?php echo the_content(); ?>
				</div>

				<div class="social-icon gradient-icon">
					<ul class="list-unstyled">
						<li><a href="<?php echo get_field('linkedin_url'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-4 ms-md-4 wow fadeInRight animated" data-wow-delay=".1s">
				<div class="how-img img-style small-style both-blue m-0">
					<img src="<?php echo get_field('staff_image'); ?>" class="img-fluid w-100">
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
