<?php
/**
* Template Name:ARIA Broacher
*/
get_header();
?>

<!-- Banner -->
<section class="contact-banner pt-4 pb-5 mb-5 clearfix">
	<div class="container">
		<a class="navbar-brand p-0 m-0" href="index.php">
			<picture class="logo">
			<img loading="lazy" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" height="35" />
			</picture>
		</a>
		<div class="row justify-content-center g-4 pt-4">
			<div class="col-md-5 wow fadeInUp" data-wow-delay=".3s">
				<?php echo get_field("contact_form"); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

<style type="text/css">
	header, .header-top {display: none;}
</style>