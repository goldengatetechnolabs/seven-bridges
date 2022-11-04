<?php
/**
* Template Name:Contact Us
*/
get_header();
?>

<!-- Banner -->
<section class="contact-banner pt-4 pb-5 mb-5 clearfix">
	<div class="container">
		<a class="navbar-brand p-0 m-0" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<picture class="logo">
				<img loading="lazy" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" height="35" />
			</picture>
		</a>
		<div class="row  g-4 pt-4">
			<div class="col-lg-7 col-md-7">
				<h1 class="text-white"><?php echo get_field('banner')['title']; ?><b></b></h1>
                <?php if (have_rows('content')) : while (have_rows('content')) : the_row(); ?>

                    <h4 class="mb-4"><b><?php echo get_sub_field('title'); ?></b></h4>
                    <h5 class="mb-4"><b><?php echo get_sub_field('title_1'); ?></b></h5>
                    <div class="row mb-5">
                        <?php if (have_rows('list')) : while (have_rows('list')) : the_row(); ?>
                            <div class="col-6">
                                <div class="">
                                    <h5 class="mb-0"><i class="fas fa-check-circle text-green p-2"></i><?php echo get_sub_field('item'); ?></h5>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>
                    <h5 class="mb-5"><b><?php echo get_sub_field('sub_heading'); ?></b></h5>
                    <h1><a href="<?php echo get_sub_field('link'); ?>" class="text-danger"><b><?php echo get_sub_field('link_text'); ?><i class="fas fa-long-arrow-right m-2"></i></b></a></h1>
                <?php endwhile; endif; ?>

			</div>
			<div class="col-lg-5 col-md-5 wow fadeInUp" data-wow-delay=".3s">
				<?php echo get_field("contact_form"); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
<style type="text/css">
	header, .header-top {display: none;}
</style>