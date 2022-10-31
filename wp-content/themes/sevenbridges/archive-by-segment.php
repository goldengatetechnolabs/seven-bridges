<?php get_header(); ?>
<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-9 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3">By Segment</h2>
				</div>
				<p class="">Get inspired by the use cases Seven Bridges supports for your industry segment.</p>
			</div>
		</div>
	</div>
</section>

<section  class="py-5 clearfix">
	<div class="container py-md-4">
		<div class="row g-4  wow fadeInUp" data-wow-delay=".1s">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-md-4">
					<div class="testimonials-block bg-white br-10 py-xl-3 link-down h-100">
						<div class="testimonials-details">
							<h5 class="primary-color medium mb-3"><?php echo the_title(); ?></h5>
							<p class="d-block pb-4"><?php echo get_the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="link">Learn how <i class="fas fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>	
		</div>
	</div>
</section>
<?php get_footer(); ?>