<?php get_header(); ?>

<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-10 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3"><?php echo get_field("leadership", "options")['banner_title']; ?></h2>
				</div>
				<p class=""><?php echo get_field("leadership", "options")['banner_short_description']; ?></p>
			</div>
		</div>
	</div>
</section>

<section  class="blogs-sect py-5 clearfix">
	<div class="container py-md-5">
		<div class="section-title pb-md-4 text-center wow fadeInUp" data-wow-delay=".1s">
			<div class="line mb-4"></div>
			<h2 class="mb-0"><?php echo get_field("leadership", "options")['title']; ?></h2>
			<p class="col-md-10 mx-auto py-4"><?php echo get_field("leadership", "options")['description']; ?></p>
		</div>
		
		<div class="row justify-content-center">
			<div class="col-md-10 col-xl-9">
				<div class="row g-4 g-md-5 wow fadeInUp animated" data-wow-delay=".1s">

                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-4">
                            <a href="<?php the_permalink(); ?>" class="testimonials-block team-block">
                                <div class="testimonials-img how-img img-style small-style both-blue m-0">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid">
                                </div>
                                <div class="testimonials-details">
                                    <div class="section-title"><h4><?php echo the_title(); ?></h4></div>
                                    <p><?php echo get_field('position'); ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
