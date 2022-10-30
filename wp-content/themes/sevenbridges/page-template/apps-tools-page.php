<?php
/**
* Template Name:Apps and Tools
*/
get_header();
?>
<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-9 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3"><?php echo get_field("banner")["title"]; ?></h2>
				</div>
				<p class=""><?php echo get_field("banner")["short_description"]; ?></p>

				<a href="<?php echo get_field("banner")["button_link"]; ?>" class="btn btn1 border-white"><?php echo get_field("banner")["button_text"]; ?></a>
			</div>
		</div>
	</div>
</section>

<!-- More than 700+ workflows and tools  -->
<section  class="tb-sect py-5 clearfix">
	<div class="container pt-md-4">
		<div class="row justify-content-between">
			<div class="col-md-6 pe-md-5 wow fadeInLeft" data-wow-delay=".1s">
				<div class="section-title">
					<div class="line mb-4 ms-0"></div>
					<h2 class="mb-2"><?php echo get_field("content")["title"]; ?></h2>
					<p><?php echo get_field("content")["description"]; ?></p>
				</div>
			</div>
			<div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
				<img src="<?php echo get_field("content")["image"]; ?>" class="img-fluid">
			</div>
		</div>
	</div>
</section>

<!-- WORKFLOWS  -->
<section  class="tb-sect py-5 clearfix">
    <?php if (have_rows('workflows')) : while (have_rows('workflows')) : the_row(); ?>
        <div class="container">
            <div class="section-title wow fadeInUp" data-wow-delay=".1s">
                <h3 class="mb-4 ls-5 primary-light"><?php echo get_sub_field('title'); ?></h3>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay=".3s">
                <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>     
                    <div class="col-md-3">
                        <div class="testimonials-block link-down h-100">
                            <div class="testimonials-details">
                                <h5 class="primary-color medium"><?php echo get_sub_field('title'); ?></h5>
                                <p class="d-block"><?php echo get_sub_field('description'); ?></p>
                                <a href="<?php echo get_sub_field('link'); ?>" class="link">Read More <i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>

<!-- TOOLS  -->
<section  class="tb-sect py-5 clearfix">
    <?php if (have_rows('tools')) : while (have_rows('tools')) : the_row(); ?>
        <div class="container pb-md-4">
            <div class="section-title wow fadeInUp" data-wow-delay=".1s">
                <h3 class="mb-4 ls-5 primary-light">TOOLS</h3>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay=".3s">
                <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>     
                    <div class="col-md-3">
                        <div class="testimonials-block link-down h-100">
                            <div class="testimonials-details">
                                <h5 class="primary-color medium"><?php echo get_sub_field('title'); ?></h5>
                                <p class="d-block mb-md-5"><?php echo get_sub_field('description'); ?></p>
                                <a href="<?php echo get_sub_field('link'); ?>" class="link">Read More <i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>

<!-- Software Development Kit  -->
<section  class="bg-f4 py-5 clearfix">
	<div class="container py-md-4">
		<div class="row justify-content-between">
			<div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
				<img src="<?php echo get_field("content_1")["image"]; ?>" class="img-fluid">
			</div>
			<div class="col-md-6 pe-md-5 wow fadeInLeft" data-wow-delay=".1s">
				<div class="section-title">
					<div class="line mb-4 ms-0"></div>
					<h2 class="mb-2"><?php echo get_field("content_1")["title"]; ?></h2>
                    <?php echo get_field("content_1")["description"]; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Portability  -->
<section  class="text-center py-5 clearfix">
	<div class="container py-md-4">
		<div class="row justify-content-center">
			<div class="col-md-10 wow fadeInUp" data-wow-delay=".1s">
				<div class="section-title">
					<div class="line mb-4"></div>
					<h2 class="mb-4"><?php echo get_field("portability")["title"]; ?></h2>
                    <?php echo get_field("portability")["description"]; ?>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>