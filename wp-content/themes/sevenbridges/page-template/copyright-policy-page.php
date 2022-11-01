<?php
/**
* Template Name:Copyright Policy
*/
get_header();
?>
<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3" style="font-size: 40px;"><?php echo get_field("banner")['title']; ?></h2>
				</div>
			</div>
		</div>
	</div>
</section>


<section  class="nn-sect py-5 clearfix">
	<div class="container py-md-4">
        <div class="row g-4">
            <div class="col-lg-10 col-md-10 col-sm-10">
                <?php echo get_field("content"); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>