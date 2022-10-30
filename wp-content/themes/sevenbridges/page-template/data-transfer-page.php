<?php
/**
* Template Name:Seven Bridges Data Transfer Impact Assessment guide
*/
get_header();
?>

<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-8 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3"><?php echo get_field("banner")["title"]; ?></h2>
				</div>
			</div>
		</div>
	</div>
</section>


<section  class="py-5 clearfix">
	<div class="container py-md-4">
    <?php echo get_field("content_1"); ?>
    </div>
</section>
<?php get_footer(); ?>