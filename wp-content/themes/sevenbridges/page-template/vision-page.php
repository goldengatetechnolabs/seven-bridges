<?php 
/**
* Template Name:Vision
*/
get_header(); ?>
<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3"><?php echo get_field("banner")["title"]; ?></h2>
				</div>
				<p class=""><?php echo get_field("banner")["short_description"]; ?></p>
			</div>
		</div>
	</div>
</section>

<!-- Multiple infrastructure options  -->
<section  class="py-5 clearfix">
    <?php if (have_rows('visualize')) : while (have_rows('visualize')) : the_row(); ?>

        <div class="container py-md-4">
            <div class="section-title mb-5 text-center  wow fadeInUp" data-wow-delay=".3s">
                <div class="line mb-4"></div>
                <h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
                <p class="mb-4 col-md-10 mx-auto"><?php echo get_sub_field('description'); ?></p>
            </div>
            <?php $i=0; ?>
            <?php if (have_rows('content')) : while (have_rows('content')) : the_row(); ?>
            <?php $i++; ?>
                <div class="row g-4 <?php echo ($i%2 == 1) ? "" : 'flex-md-row-reverse'; ?> justify-content-center align-items-center clearfix mb-5 py-md-4">
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".1s">
                        
                        <div class="welcome-p">
                            <?php echo get_sub_field('short_description'); ?>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
                        <div class="how-img img-style small-style both-blue "><img src="<?php echo get_sub_field('image'); ?>" class="img-fluid br-0"></div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    <?php endwhile; endif; ?>

</section>

<section  class="data-privacy-sect bg-f4 py-5 mb-5 clearfix">
    <?php if (have_rows('new_world')) : while (have_rows('new_world')) : the_row(); ?>
        <div class="container py-md-4">
            <div class="welcome-block  col-md-8 mx-auto  wow fadeInUp" data-wow-delay=".1s">
                <div class="section-title pb-md-4">
                    <h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
                </div>
            </div>
            <div class="row g-3 gx-md-4 gy-md-5 wow fadeInUp" data-wow-delay=".1s">
            <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                <div class="col-md-6">
                    <div class="exp-block">
                        <i class="fas fa-check-circle text-green"></i>
                        <h5 class="bold mb-0"><?php echo get_sub_field('title'); ?></h5>
                    </div>
                </div>
            <?php endwhile; endif; ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>

<!-- Case Study  -->
<section  class="case-area py-5 clearfix">
	<div class="container pb-md-4 wow fadeInUp" data-wow-delay=".1s">
		<div class="ic-block  bg-f4 mh-auto">
			<div class="row justify-content-center">
				<div class="col-md-3">
					<div class="ic-img bg-white"><img src="<?php echo get_field("data_driven")["image"]; ?>" class="img-fluid"></div>
				</div>
				<div class="col-md-9 px-5 py-4 my-md-3">
					<div class="section-title"><h4><?php echo get_field("data_driven")["title"]; ?></h4></div>
					<p class="welcome-p"><?php echo get_field("data_driven")["description"]; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- CTA -->
<?php get_template_part("template-parts/cta-section"); ?>
<?php get_footer(); ?>