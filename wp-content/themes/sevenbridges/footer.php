<footer class="clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md">
				<div class="single-footer-caption mb-4 mb-md-0 h-100 d-flex justify-content-between flex-column wow fadeInLeft" data-wow-delay=".5s">
					<div class="footer-tittle text-center text-md-start mb-md-5">
						<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<picture class="logo mb-4 mb-md-5">
								<img loading="lazy" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" height="35" />
							</picture>
						</a>
					</div>
					<div class="text-md-start text-center">
						<div class="single-footer-caption social-block">
							<div class="footer-tittle">
								<div class="social-icon">
                                <?php if ( is_active_sidebar( 'footer-social-media-links' ) ) { dynamic_sidebar( 'footer-social-media-links' ); } ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md">
				<div class="single-footer-caption mb-md-4 wow fadeInLeft" data-wow-delay=".3s">
					<div class="footer-tittle mb-md-5">
                    <?php if ( is_active_sidebar( 'footer-Platform-menu' ) ) { dynamic_sidebar( 'footer-Platform-menu' ); } ?>
					</div>
				</div>
			</div>

			<div class="col-md">
				<div class="single-footer-caption mb-md-4 wow fadeInLeft" data-wow-delay=".1s">
					<div class="footer-tittle">
                    <?php if ( is_active_sidebar( 'footer-solutions-menu' ) ) { dynamic_sidebar( 'footer-solutions-menu' ); } ?>

						
					</div>
				</div>
			</div>

			<div class="col-md-2">
				<div class="single-footer-caption mb-md-4 wow fadeInRight" data-wow-delay=".1s">
					<div class="footer-tittle mb-md-5">
                    <?php if ( is_active_sidebar( 'footer-why-menu' ) ) { dynamic_sidebar( 'footer-why-menu' ); } ?>
					</div>
				</div>
			</div>

			<div class="col-md">
				<div class="single-footer-caption mb-md-4 wow fadeInRight" data-wow-delay=".3s">
					<div class="footer-tittle">
                    <?php if ( is_active_sidebar( 'footer-insights-menu' ) ) { dynamic_sidebar( 'footer-insights-menu' ); } ?>
					</div>
				</div>
			</div>

			<div class="col-md">
				<div class="single-footer-caption mb-md-4 wow fadeInRight" data-wow-delay=".3s">
					<div class="footer-tittle">
                    <?php if ( is_active_sidebar( 'footer-company-menu' ) ) { dynamic_sidebar( 'footer-company-menu' ); } ?>

						
					</div>
				</div>
			</div>

			<div class="col-md">
				<div class="single-footer-caption mb-md-4 wow fadeInRight" data-wow-delay=".3s">
					<div class="footer-tittle">
                    <?php if ( is_active_sidebar( 'footer-career-menu' ) ) { dynamic_sidebar( 'footer-career-menu' ); } ?>

						
					</div>
				</div>
			</div>
		</div>
	
		<!-- Copyright -->
		<div class="footer-bottom-area">
			<div class="row text-center text-md-start align-items-center justify-content-between wow fadeInUp" data-wow-delay=".3s">
				<div class="col-md-4">
					<p class="mb-0">© <?php echo date("Y"); ?> Seven Bridges Genomics.</p>
				</div>
				<div class="col-md-8">
                <?php if ( is_active_sidebar( 'footer-links' ) ) { dynamic_sidebar( 'footer-links' ); } ?>
				</div>
			</div>
		</div>
	</div>
</footer>


<!-- BACK TO TOP -->
<div class="" title="Back to Top" id="scrollUp"><i class="fal fa-angle-up"></i></div>


<!-- Thank You Modal -->
<div class="modal fade" id="thanksModal" tabindex="-1" aria-labelledby="forgotLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-c1 p-3">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-md-4 pt-0 mb-5 text-center">
            	<img src="images/favicon.png">
                <div class="section-title">
                	<h3 class="mb-3">Thanks for getting in <span>touch!</span></h3>
                </div>
            	<h2 class="section-title">We typically respond within 24 hours. In the meantime, feel free to checkout our frequently asked questions.</h2>
            </div>
        </div>
    </div>
</div>


<!-- Main Js files -->

<?php wp_footer(); ?>

</body>
</html>