<?php
/**
* Template Name:Platform Support
*/
get_header();
?>

<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3" style="font-size: 40px;"><?php echo get_field("banner")["title"]; ?></h2>
				</div>
				<p class=""><?php echo get_field("banner")["short_description"]; ?></p>
			</div>
		</div>
	</div>
</section>


<section  class="py-5 clearfix">
	<div class="container">
		<div class="row g-4  wow fadeInUp" data-wow-delay=".1s">
            <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                <div class="col-md-4">
                    <div class="box d-block h-100">
                        <h5 class="medium primary-color"><?php echo get_sub_field('title'); ?></h5>
                        <p class="welcome-p mb-0"><?php echo get_sub_field('description'); ?></p>
                        <p class="mt-4"><a href="<?php echo get_sub_field('link'); ?>" class="link mt-3"><?php echo get_sub_field('link_text'); ?> <i class="fas fa-long-arrow-right ms-2"></i></a></p>
                    </div>
                </div>
            <?php endwhile; endif; ?>
		</div>
	</div>
</section>

<section  class="case-area py-5 clearfix">
	<div class="container pb-md-4 wow fadeInUp" data-wow-delay=".1s">
		<div class="ic-block  bg-f4 mh-auto">
			<div class="row justify-content-center">
				<div class="col-md-3">
					<div class="ic-img bg-white"><img src="<?php echo get_field("support_contact")["image"]; ?>" class="img-fluid"></div>
				</div>
				<div class="col-md-9 px-5 py-4 my-md-3">
					<div class="section-title"><h4><?php echo get_field("support_contact")["title"]; ?></h4></div>
					<p class="welcome-p"><?php echo get_field("support_contact")["description"]; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>