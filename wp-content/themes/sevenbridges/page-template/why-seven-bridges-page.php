<?php
/**
* Template Name:Why Seven Bridges
*/
get_header();
?>

<!-- Banner -->
<?php get_template_part("template-parts/banner-one"); ?>

<section  class="py-5 clearfix">
	<?php if (have_rows('bioinformatics_platform')) : while (have_rows('bioinformatics_platform')) : the_row(); ?>
        <div class="container py-md-4">
            <div class="section-title mb-5  text-center  wow fadeInUp" data-wow-delay=".3s">
                <div class="line mb-4"></div>
                <h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
                <p class="mb-4 col-md-10 mx-auto"><?php echo get_sub_field('description'); ?></p>
            </div>
            <?php $i=0; ?>
            <?php if (have_rows('content')) : while (have_rows('content')) : the_row(); ?>
            <?php $i++; ?>
                <div class="row g-4 <?php echo ($i%2 == 1) ? "" : 'flex-md-row-reverse'; ?> justify-content-center align-items-center clearfix mb-5">
                    <div class="col-md-6 pe-md-5 wow fadeInLeft" data-wow-delay=".1s">
                        <div class="section-title">
                            <h3 class="text-uppercase ls-5 primary-light"><?php echo get_sub_field('title'); ?>SCALABILITY</h3>
                            <h4 class="mb-3"><?php echo get_sub_field('sub_title'); ?></h4>
                        </div>
                        <div class="welcome-p">
                            <p><?php echo get_sub_field('short_description'); ?></p>

                            <ul class="list">
                                <?php if (have_rows('list')) : while (have_rows('list')) : the_row(); ?>
                                    <li><?php echo get_sub_field('item'); ?></li>
                                <?php endwhile; endif; ?>
                            </ul>
                            <a href="<?php echo get_sub_field('link'); ?>" class="link"><?php echo get_sub_field('llink_text'); ?>Learn More <i class="fas fa-long-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
                        <div class="dd-img text-center"><img src="<?php echo get_sub_field('image'); ?>" class="img-fluid"></div>
                    </div>
                </div>
            <?php endwhile; endif; ?>

            <div class="row g-4 justify-content-between wow fadeInUp" data-wow-delay=".1s">
            <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                <div class="col-md-3">
                    <div class="box text-center h-100 align-items-start">
                        <div class="section-title">
                            <h2 class="secondary-color"><?php echo get_sub_field('title'); ?></h2>
                            <h4 class="mb-0"><?php echo get_sub_field('short_description'); ?></h4>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
	<?php endwhile; endif; ?>

</section>

<!-- Testimonials  -->
<section  class="customer-area pt-4 pb-5 mb-md-4 clearfix">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="welcome-block text-center  wow fadeInUp" data-wow-delay=".1s">
					<div class="section-title pb-md-5">
						<div class="line mb-4"></div>
						<h2 class="mb-0"><?php echo get_field('testimonial')['title'] ?></h2>
					</div>
				</div>
			</div>
		</div>
        <?php echo do_shortcode("[Testimonial_Shortcode]"); ?>
	</div>
</section>

<!-- CTA -->
<!-- <section class="cta-sect bg-secondary-color text-center text-md-start text-white clearfix pt-5 pb-md-0 pb-5">
	<div class="container">
		<div class="row justify-content-center justify-content-center g-4">
			<div class="col-md-11">
				<div class="row g-4 align-items-center justify-content-center">
					<div class="col-md-5 wow fadeInLeft" data-wow-delay=".3s">
						<div class="cta-img"><img src="images/cta.png" class="img-fluid w-100"></div>
					</div>
					<div class="col-md-7 ps-md-5  wow fadeInRight" data-wow-delay=".3s">
						<div class="section-title">
							<h2 class="mb-3 text-white">Discover like never before with a complete bioinformatics ecosystem.</h2>
						</div>

						<a href="" class="btn m-1">Request a Demo</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!-- CTA -->
<?php get_template_part("template-parts/cta-section"); ?>

<?php get_footer(); ?>