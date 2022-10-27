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