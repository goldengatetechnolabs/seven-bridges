<?php get_header(); ?>

<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix mb-5">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3"><?php echo the_title(); ?></h2>
				</div>
				<p class=""><?php echo get_the_excerpt(); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="testimonials-area pb-5 clearfix">
	<div class="container pb-md-4">
        <div class="row" style="padding-left: 150px; padding-right: 150px;">
            <div class="col-lg-12 col-md-12 mb-4">
                <?php echo the_content(); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>