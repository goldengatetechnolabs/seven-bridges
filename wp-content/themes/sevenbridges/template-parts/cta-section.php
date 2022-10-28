<!-- CTA -->
<section class="cta-sect bg-secondary-color text-center text-md-start text-white clearfix pt-3">
	<div class="container">
		<div class="row justify-content-center justify-content-center g-4">
			<div class="col-md-11">
				<div class="row align-items-center justify-content-center">
					<div class="col-md-5 wow fadeInLeft" data-wow-delay=".3s">
						<div class="cta-img"><img src="<?php echo get_field("cta")["image"]; ?>" class="img-fluid w-100"></div>
					</div>
					<div class="col-md-7 py-5 py-md-0 ps-md-5  wow fadeInRight" data-wow-delay=".3s">
						<div class="section-title">
							<h2 class="mb-3 text-white"><?php echo get_field("cta")["title"]; ?></h2>
						</div>

						<a href="<?php echo get_field("cta")["button_link"]; ?>" class="btn"><?php echo get_field("cta")["button_text"]; ?></a>
                        <?php if(get_field("cta")["button_text_1"]) {?>
						    <a href="<?php echo get_field("cta")["button_link_1"]; ?>" class="btn btn2 ms-xl-3 m-1"><?php echo get_field("cta")["button_text_1"]; ?></a>
                        <?php }  ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>