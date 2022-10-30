<?php
/**
* Template Name:Enterprise Grade Support
*/
get_header();
?>
<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3"><?php echo get_field("banner")["title"]; ?></h2>
				</div>
				<p><?php echo get_field("banner")["short_description"]; ?></p>
			</div>
		</div>
	</div>
</section>


<!-- Foundation  -->
<section  class="py-5 clearfix">
<?php if (have_rows('streamlining_analysis')) : while (have_rows('streamlining_analysis')) : the_row(); ?>
	<div class="container py-md-4">
		<div class="section-title mb-5 text-center  wow fadeInUp" data-wow-delay=".3s">
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
                        <h3 class="text-uppercase ls-5 primary-light"><?php echo get_sub_field('title'); ?></h3>
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
	</div>
<?php endwhile; endif; ?>
</section>


<!-- Welcome  -->
<section  class="pb-5 clearfix">
	<div class="container pb-md-5">
    <?php if (have_rows('results')) : while (have_rows('results')) : the_row(); ?>
		<div class="row justify-content-center align-items-center">
			<div class="col-md-10 wow fadeInUp" data-wow-delay=".1s">
				<div class="section-title mb-5 text-center  wow fadeInUp" data-wow-delay=".3s">
					<h3 class="pb-md-4"><?php echo get_sub_field('title'); ?></h3>
				</div>
				<div class="row g-5 g-md-4 justify-content-center">
                    <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                        <div class="col-md-4">
                            <div class="icon-round text-center">
                                <div class="section-title">
                                    <h2 class="secondary-color mb-0"><?php echo get_sub_field('title'); ?></h2>
                                    <h5 class="bold mb-0"><?php echo get_sub_field('sub_title'); ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
				</div>
			</div>
		</div>
    <?php endwhile; endif; ?>
	</div>
</section>

<!-- CTA -->
<?php get_template_part("template-parts/cta-section"); ?>

<?php get_footer(); ?>