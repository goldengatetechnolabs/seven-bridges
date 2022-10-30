<?php
/**
* Template Name:Consulting Services
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

<!-- Welcome  -->
<section  class="round-icon-sect py-5 mt-md-4 clearfix">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-10 wow fadeInUp" data-wow-delay=".1s">
				<div class="row g-5 g-md-4 justify-content-center">
                    <?php if (have_rows('content')) : while (have_rows('content')) : the_row(); ?>
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
	</div>
</section>

<!-- Welcome  -->
<section  class="bg-f4 py-5 clearfix">
    <?php if (have_rows('trusted_partner')) : while (have_rows('trusted_partner')) : the_row(); ?>
        <div class="container py-md-4">
            <div class="section-title mb-5 text-center  wow fadeInUp" data-wow-delay=".3s">
                <div class="line mb-4"></div>
                <h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
                <p class="mb-4 col-md-10 mx-auto"><?php echo get_sub_field('description'); ?></p>
            </div>

            <div class="row g-4 justify-content-between mb-5 wow fadeInUp" data-wow-delay=".1s">
                <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                    <div class="col-md-3">
                        <div class="box text-center h-100">
                            <div class="section-title"><h4 class="mb-0"><?php echo get_sub_field('title'); ?></h4></div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
            
            <div class="row justify-content-between align-items-center mb-5">
                <?php if (have_rows('experts_on_demand')) : while (have_rows('experts_on_demand')) : the_row(); ?>
                    <div class="col-md-6 pe-md-5 wow fadeInLeft" data-wow-delay=".1s">
                        <div class="section-title">
                            <h4 class="mb-3"><?php echo get_sub_field('title'); ?></h4>
                        </div>
                        <div class="welcome-p">
                            <p><?php echo get_sub_field('description'); ?></p>
                        </div>
                    </div>
                    <div class="col-md-5 wow fadeInRight" data-wow-delay=".1s">
                        <div class="info-img"><img src="<?php echo get_sub_field('image'); ?>" class="img-fluid"></div>
                    </div>
                <?php endwhile; endif; ?>
            </div>

            <div class="section-title mb-5 text-center">
                <h3 class="mb-4"><?php echo get_sub_field('main_heading'); ?></h3>
            </div>

            <div class="row g-2 g-md-2 g-lg-4 wow fadeInUp" data-wow-delay=".1s">
            <?php if (have_rows('card_1')) : while (have_rows('card_1')) : the_row(); ?>
                <div class="col-20 col-md-3 col-6">
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

<!-- Consulting Approach  -->
<section  class="approach-area py-5 clearfix">
<?php if (have_rows('consulting_approach')) : while (have_rows('consulting_approach')) : the_row(); ?>
	<div class="container pt-md-4">
		<div class="welcome-block text-center  wow fadeInUp" data-wow-delay=".1s">
			<div class="section-title col-md-8 mx-auto pb-md-5">
				<div class="line mb-4"></div>
				<h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
				<?php echo get_sub_field('description'); ?>
			</div>
		</div>
		<div class="row g-4 justify-content-center">
            <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".1s">
                    <div class="approach-block h-100">
                        <div class="text-end mb-3 mb-md-4"><img src="<?php echo get_sub_field('icon'); ?>" height="90"></div>
                        <div class="section-title">
                            <h4><?php echo get_sub_field('title'); ?></h4>
                            <p class="mb-0"><?php echo get_sub_field('description'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
		</div>
	</div>
<?php endwhile; endif; ?>
</section>

<!-- Our customers  -->
<section  class="customer-area py-4 clearfix">
	<div class="container">
        <?php if (have_rows('our_customers')) : while (have_rows('our_customers')) : the_row(); ?>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="welcome-block text-center  wow fadeInUp" data-wow-delay=".1s">
                        <div class="section-title pb-md-5">
                            <div class="line mb-4"></div>
                            <h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
                            <p><?php echo get_sub_field('description'); ?></p>
                        </div>
                    </div>

                    <div class="customer-block text-center">
                    <?php if (have_rows('customers')) : while (have_rows('customers')) : the_row(); ?>
                        <div class="c-text">
                            <h5 class="primary-color medium mb-4 lh-base"><?php echo get_sub_field('description'); ?></h5>

                            <h5 class="secondary-color medium"><?php echo get_sub_field('position'); ?></h5>
                        </div>
                    <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
	</div>
</section>

<!-- Case Study  -->
<section  class="case-area py-5 clearfix">
	<div class="container py-md-4">
		<div class="welcome-block text-center  wow fadeInUp" data-wow-delay=".1s">
			<div class="section-title pb-md-4">
				<div class="line mb-4"></div>
				<h2 class="mb-4">Case studies</h2>
			</div>
		</div>
		<div class="row g-4 justify-content-center">
			<div class="col-md-4 wow fadeInUp" data-wow-delay=".1s">
				<div class="testimonials-block link-down">
					<div class="testimonials-img bg-white"><img src="images/case-study/01.png" class="img-fluid"></div>
					<div class="testimonials-details">
						<p>CareDx worked with the Seven Bridges team to translate tools, optimize workflows, implement end-to-end automation, and provide proactive monitoring of runs post-migration.</p>
						<a href="" class="link">Read the case study <i class="fas fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>

			<div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
				<div class="testimonials-block link-down">
					<div class="testimonials-img bg-white"><img src="images/case-study/02.png" class="img-fluid"></div>
					<div class="testimonials-details">
						<p>The Seven Bridges team worked closely with a large pharmaceutical client to setup the Platform and enable easy access and analysis of scRNASeq data across the organization.</p>
						<a href="" class="link">Read the case study <i class="fas fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>

			<div class="col-md-4 wow fadeInUp" data-wow-delay=".5s">
				<div class="testimonials-block link-down">
					<div class="testimonials-img bg-white"><img src="images/case-study/03.png" class="img-fluid"></div>
					<div class="testimonials-details">
						<p>From 80TB of data, the Seven Bridges team quickly delivered variant calls for more than 1,350 cancer whole genomes to PCAWG to help meet the project deadline.</p>
						<a href="" class="link">Read the case study <i class="fas fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- CTA -->
<?php get_template_part("template-parts/cta-section"); ?>
<?php get_footer(); ?>