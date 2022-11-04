<?php
/**
* Template Name:Open Access Policy
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
				<p class=""><?php echo get_field("banner")["short_description"]; ?></p>
			</div>
		</div>
	</div>
</section>

<section  class="py-4 clearfix">
	<div class="container">
		<a href="<?php echo get_post_type_archive_link( 'publications' ); ?>" class="link"><i class="fas fa-long-arrow-left me-2"></i>Back to Publications</a>
		<div class="row g-4 justify-content-center align-items-center mt-3 clearfix">
			<div class="col-md-8 wow fadeInLeft" data-wow-delay=".1s">
				<div class="section-title">
					<h2 class="mb-3"><?php echo get_field("back_to_publications")["title"]; ?></h2>
				</div>
				<div class="welcome-p">
					<p><?php echo get_field("back_to_publications")["description"]; ?></p>
				</div>
			</div>

			<div class="col-md-4 wow fadeInRight" data-wow-delay=".1s">
				<div class="text-center"><img src="<?php echo get_field("back_to_publications")["image"]; ?>" class="img-fluid"></div>
			</div>
		</div>
	</div>
</section>

<!-- Case Studies  -->
<section  class="pp-area pt-4 pb-5 clearfix">
	<div class="container">
		<div class="row g-4 g-md-5 justify-content-center wow fadeInUp" data-wow-delay=".1s">
			<div class="col-md-6">
            <?php if (have_rows('benefits')) : while (have_rows('benefits')) : the_row(); ?>
				<div class="welcome-block welcome-p">
					<div class="section-title pb-md-2">
						<h3 class="mb-2"><?php echo get_sub_field('title'); ?></h3>
					</div>
					<p><?php echo get_sub_field('short_description'); ?><a href="<?php echo get_sub_field('link'); ?>" class="secondary-color underline medium"><?php echo get_sub_field('link_text'); ?></a> <?php echo get_sub_field('short_description_1'); ?></p>

					<ul class="list-unstyled list-green">
                    <?php if (have_rows('list')) : while (have_rows('list')) : the_row(); ?>        
                        <li>
                            <i class="fas fa-check-circle text-green h5 mb-0"></i>
                            <p><strong><?php echo get_sub_field('bold_text'); ?></strong> <?php echo get_sub_field('item'); ?></p>
                        </li>
                    <?php endwhile; endif; ?>

		    		</ul>
				</div>
            <?php endwhile; endif; ?>

			</div>
			<div class="col-md-6">
            <?php if (have_rows('support')) : while (have_rows('support')) : the_row(); ?>
				<div class="welcome-block welcome-p">
					<div class="section-title pb-md-2">
						<h3 class="mb-2"><?php echo get_sub_field('title'); ?></h3>
					</div>
					<p><?php echo get_sub_field('short_description'); ?></p>

					<ul class="list-unstyled list-green">
                        <?php if (have_rows('list')) : while (have_rows('list')) : the_row(); ?>        

                            <li>
                                <i class="fas fa-check-circle text-green h5 mb-0"></i>
                                <p><strong><?php echo get_sub_field('bold_text'); ?></strong> <?php echo get_sub_field('item'); ?></p>
                            </li>
                        <?php endwhile; endif; ?>

		    		</ul>
				</div>
            <?php endwhile; endif; ?>

			</div>
		</div>
	</div>
</section>

<!-- Case Studies  -->
<section  class="pp-area bg-f8 py-5 clearfix">
	<div class="container pb-md-5  wow fadeInUp" data-wow-delay=".1s">
		<div class="section-title text-center">
			<h3><?php echo get_field("contact_form")["title"]; ?></h3>
		</div>
		<p class="text-center"><?php echo get_field("contact_form")["short_description"]; ?></p>

		<div class="row g-4 justify-content-center">
            <div class="col-md-6">
                <?php echo get_field("contact_form")["form"]; ?>
            </div>
		</div>
	</div>
</section>

<?php get_footer(); ?>