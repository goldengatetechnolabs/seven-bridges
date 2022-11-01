<?php
// Template Name:404
get_header(); ?>
<!-- Welcome  -->
<!-- Banner -->
<section class="case-area bnr-404 banner-area text-center inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-center g-4">
			<div class="col-md-9 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3 lh-sm">We can’t find the page you are looking for. Sorry for the inconvenience.</h2>
				</div>
				<!-- <a href="" class="btn btn1 border-white"><i class="far fa-undo me-2 fs-14"></i>Go Back</a> -->
				<button type="button" onclick='javascript:history.back()' class="btn btn1 border-white"><i class="far fa-undo me-2 fs-14"></i>Go Back</button>
				<div class="row g-4 py-5 mt-md-5 text-start justify-content-center">
					<div class="col-md-6 wow fadeInUp" data-wow-delay=".1s">
						<div class="testimonials-block br-0">
							<div class="testimonials-img bg-white"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/11/Group-15111.svg" class="img-fluid"></div>
							<div class="testimonials-details">
								<div class="section-title"><h4>Seven Bridges Platform</h4></div>
								<a href="/seven-bridges-platform/" class="link">Visit Link <i class="fas fa-long-arrow-right"></i></a>
							</div>

							<div class="hover-404">
								<div class="section-title"><h3 class="medium text-white">Bioinformatics platform for collaborative data-driven discovery.</h3></div>
								<a href="/seven-bridges-platform/" class="link text-white">Visit Link <i class="fas fa-long-arrow-right ms-2"></i></a>
							</div>	
						</div>
					</div>

					<div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
						<div class="testimonials-block br-0">
							<div class="testimonials-img bg-white"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/11/Group-15110.svg" class="img-fluid"></div>
							<div class="testimonials-details">
								<div class="section-title"><h4>Why Seven Bridges?</h4></div>
								<a href="/why-seven-bridges/" class="link">Visit Link <i class="fas fa-long-arrow-right"></i></a>
							</div>

							<div class="hover-404">
								<div class="section-title"><h3 class="medium text-white">Drive research with the leading bioinformatics software, analytics and professional support.</h3></div>
								<a href="/why-seven-bridges/" class="link text-white">Visit Link <i class="fas fa-long-arrow-right ms-2"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
