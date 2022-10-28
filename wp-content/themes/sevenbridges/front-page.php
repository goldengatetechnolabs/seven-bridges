<?php get_header(); ?>

<!-- Banner -->
<section class="banner-area gradient-red pt-5 clearfix">
<?php if (have_rows('banner')) : while (have_rows('banner')) : the_row(); ?>
	<div class="container pt-md-4">
		<div class="row justify-content-between g-4">
			<div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h5 class="mb-0 text-uppercase text-white ls-5"><?php echo get_sub_field('sub_title'); ?></h5>
					<h2 class="text-uppercase exbold text-white my-3"><?php echo get_sub_field('title'); ?></h2>
				</div>
				<?php echo get_sub_field('description'); ?>
			</div>

			<div class="col-md-4 col-10 mx-auto wow fadeInUp" data-wow-delay=".3s">
				<div class="banner-img img-style"><img src="<?php echo get_sub_field('image'); ?>" class="img-fluid w-100"></div>
			</div>
		</div>
	</div>
    <?php endwhile; endif; ?>
</section>

<!-- Welcome  -->
<section  class="welcome-area py-5 clearfix">
	<div class="container pt-5 mt-5 mt-md-0">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-10 wow fadeInUp" data-wow-delay=".1s">
				<div class="welcome-block text-center">
					<div class="section-title">
						<div class="line mb-4"></div>
						<h2 class="mb-4"><?php echo get_field('impact')['title']; ?></h2>
						<p class="mb-4"><?php echo get_field('impact')['description']; ?></p>
					</div>

					<a href="<?php echo get_field('impact')['button_link']; ?>" class="btn btn1"><?php echo get_field('impact')['button_text']; ?></a>	
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Bioinformatics will soon drive R&D  -->
<section  class="bio-area pb-5 clearfix">
	<div class="container pb-md-5">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-5 wow fadeInLeft" data-wow-delay=".1s">
				<div class="section-title">
					<h4 class="mb-3"><?php echo get_field('bioinformatics')['title']; ?></h4>
				</div>
				<p class="welcome-p"><?php echo get_field('bioinformatics')['description']; ?></p>
			</div>

			<div class="col-md-7 wow fadeInRight" data-wow-delay=".1s">
				<div class="chart-img"><img src="<?php echo get_field('bioinformatics')['image']; ?>" class="img-fluid"></div>
			</div>
		</div>
	</div>
</section>

<!-- SEVEN BRIDGES PLATFORM -->
<section class="learn-area text-white py-5 clearfix">
    <?php if (have_rows('platform')) : while (have_rows('platform')) : the_row(); ?>  
        <div class="container py-md-4">
            <div class="section-title pb-4  text-center wow fadeInUp" data-wow-delay=".1s">
                <h4 class="text-uppercase light ls-5 mb-3"><?php echo get_sub_field('sub_title'); ?></h4>
                <h2 class="mb-3 text-white"><?php echo get_sub_field('title'); ?></h2>
                <p class="welcome-p text-center"><?php echo get_sub_field('short_description'); ?></p>
            </div>

            <div class="row g-4 icon-sect">
                <?php $delay=0; ?>
                <?php if (have_rows('content')) : while (have_rows('content')) : the_row(); ?>  
                <?php $delay++; ?>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay=".<?php echo $delay; ?>s">
                        <div class="icon-block light">
                            <div class="icon-img"><img src="<?php echo get_sub_field('image'); ?>" class=""></div>
                            <div class="icon-details"><?php echo get_sub_field('short_description'); ?></div>
                        </div>
                    </div>
                <?php endwhile; endif; ?> 
            </div>

            <div class="section-title text-center py-4 mt-md-3 wow fadeInUp" data-wow-delay=".9s">
                <h3 class="text-white"><?php echo get_sub_field('title_1'); ?></h3>
            </div>
            <div class="tabs-block  wow fadeInUp" data-wow-delay="1s">
                <ul class="nav nav-pills border-0 justify-content-center mb-0" id="pills-tab" role="tablist">
                    <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>  
                        <li class="nav-item" role="presentation">
                            <div class="nav-link active" id="pills-ARIA-tab" data-bs-toggle="pill" data-tab="p1" data-bs-target="#pills-ARIA" type="button" role="tab" aria-controls="pills-ARIA" aria-selected="true">
                                <div class="section-title">
                                    <h3 class="text-white"><?php echo get_sub_field('title'); ?></h3>
                                    <h4><?php echo get_sub_field('sub_title'); ?></h4>
                                </div>
                                <p class="text-white"><?php echo get_sub_field('description'); ?></p>
                                <a href="<?php echo get_sub_field('learn_more_link'); ?>" class="link text-white">Learn More <i class="fas fa-long-arrow-right ms-2 secondary-color"></i></a>
                                <div class="op-ttl"><?php echo get_sub_field('div_title'); ?></div>
                            </div>
                        </li>
                    <?php endwhile; endif; ?> 
                    <?php if (have_rows('card_1')) : while (have_rows('card_1')) : the_row(); ?>  
                        <li class="nav-item" role="presentation">
                            <div class="nav-link" id="pills-GRAF-tab" data-bs-toggle="pill" data-tab="p2" data-bs-target="#pills-GRAF" type="button" role="tab" aria-controls="pills-GRAF" aria-selected="false">
                                <div class="section-title">
                                    <h3 class="text-white"><?php echo get_sub_field('title'); ?></h3>
                                    <h4><?php echo get_sub_field('sub_title'); ?></h4>
                                </div>
                                <p class="text-white"><?php echo get_sub_field('description'); ?></p>
                                <a href="<?php echo get_sub_field('learn_more_link'); ?>" class="link text-white">Learn More <i class="fas fa-long-arrow-right ms-2 secondary-color"></i></a>
                                <div class="op-ttl"><?php echo get_sub_field('div_title'); ?></div>
                            </div>
                        </li>
                    <?php endwhile; endif; ?> 
                    <?php if (have_rows('card_2')) : while (have_rows('card_2')) : the_row(); ?>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link" id="pills-RHEO-tab" data-bs-toggle="pill" data-tab="p3" data-bs-target="#pills-RHEO" type="button" role="tab" aria-controls="pills-RHEO" aria-selected="false">
                                <div class="section-title">
                                    <h3 class="text-white"><?php echo get_sub_field('title'); ?></h3>
                                    <h4><?php echo get_sub_field('sub_title'); ?></h4>
                                </div>
                                <p class="text-white"><?php echo get_sub_field('description'); ?></p>
                                <a href="<?php echo get_sub_field('learn_more_link'); ?>" class="link text-white">Learn More <i class="fas fa-long-arrow-right ms-2 secondary-color"></i></a>
                                <div class="op-ttl"><?php echo get_sub_field('div_title'); ?></div>
                            </div>
                        </li>
                    <?php endwhile; endif; ?>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="aa-line text-center">
                        <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                        <img src="<?php echo get_sub_field('position_image'); ?>" class="l-lb l-left img-fluid active" id="p1">
                        <?php endwhile; endif; ?>

                        <?php if (have_rows('card_1')) : while (have_rows('card_1')) : the_row(); ?>
                        <img src="<?php echo get_sub_field('position_image'); ?>"  class="l-lb l-center img-fluid" id="p2">
                        <?php endwhile; endif; ?>

                        <?php if (have_rows('card_2')) : while (have_rows('card_2')) : the_row(); ?>
                        <img src="<?php echo get_sub_field('position_image'); ?>" class="l-lb l-right img-fluid" id="p3" >
                        <?php endwhile; endif; ?>
                    </div>
                    <!-- ARIA -->
                    <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                    <div class="tab-pane fade active show" id="pills-ARIA" role="tabpanel" aria-labelledby="pills-ARIA-tab">
                        <div class="text-center"><img src="<?php echo get_sub_field('main_image'); ?>" class="img-fluid"></div>
                    </div>
                    <?php endwhile; endif; ?>
                    <!-- GRAF -->
                    <?php if (have_rows('card_1')) : while (have_rows('card_1')) : the_row(); ?>
                    <div class="tab-pane fade" id="pills-GRAF" role="tabpanel" aria-labelledby="pills-GRAF-tab">
                        <div class="text-center"><img src="<?php echo get_sub_field('main_image'); ?>" class="img-fluid"></div>
                    </div>
                    <?php endwhile; endif; ?>
                    <!-- RHEO -->
                    <?php if (have_rows('card_2')) : while (have_rows('card_2')) : the_row(); ?>
                    <div class="tab-pane fade" id="pills-RHEO" role="tabpanel" aria-labelledby="pills-RHEO-tab">
                        <div class="text-center"><img src="<?php echo get_sub_field('main_image'); ?>" class="img-fluid"></div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?> 
</section>

<!-- PARTNER  -->
<section  class="partner-area py-5 clearfix">
<?php if (have_rows('partner')) : while (have_rows('partner')) : the_row(); ?>
	<div class="container py-md-4">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-6 wow fadeInLeft" data-wow-delay=".1s">
				<div class="info-img"><img src="<?php echo get_sub_field('image'); ?>" class="img-fluid"></div>
			</div>
			<div class="col-md-6 ps-md-5 wow fadeInRight" data-wow-delay=".1s">
				<div class="section-title">
					<h3 class="text-uppercase ls-5 primary-light"><?php echo get_sub_field('title'); ?></h3>
					<h4 class="mb-3"><?php echo get_sub_field('sub_title'); ?></h4>
				</div>
				<div class="welcome-p">
					<p><?php echo get_sub_field('description'); ?></p>

					<ul class="list">

                        <?php if (have_rows('list')) : while (have_rows('list')) : the_row(); ?>
						    <li><?php echo get_sub_field('item'); ?></li>
						<?php endwhile; endif; ?>
					</ul>
					<a href="<?php echo get_sub_field('lern_more_link'); ?>" class="link">Learn More <i class="fas fa-long-arrow-right ms-2"></i></a>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>
</section>

<!-- Streamline the path to discovery  -->
<section  class="discovery-area pt-5 clearfix">
<?php if (have_rows('discovery')) : while (have_rows('discovery')) : the_row(); ?>

	<div class="container pt-md-4">
		<div class="welcome-block text-center  wow fadeInUp" data-wow-delay=".1s">
			<div class="section-title pb-md-4">
				<div class="line mb-4"></div>
				<h2 class="mb-4 mb-md-5"><?php echo get_sub_field('title'); ?></h2>
				<p><?php echo get_sub_field('description'); ?></p>
			</div>
		</div>
       <?php  $wow=0; ?>
		<div class="row g-4 justify-content-center">
            <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
            <?php  $wow++; ?>
                <div class="col-md-3 wow fadeInUp" data-wow-delay=".<?php  echo $wow+1; ?>s">
                    <div class="discovery-block text-center">
                        <h5 class="primary-color"><?php echo get_sub_field('title'); ?></h5>
                        <div class="discovery-icon"><img src="<?php echo get_sub_field('icon'); ?>"></div>
                        <a href="<?php echo get_sub_field('link'); ?>" class="link">Learn More <i class="fas fa-long-arrow-right ms-2"></i></a>
                    </div>
                </div>
            <?php endwhile; endif; ?>
		</div>
	</div>
<?php endwhile; endif; ?>
</section>


<!-- Clients  -->
<section  class="clients-area py-5 clearfix">
<?php if (have_rows('access')) : while (have_rows('access')) : the_row(); ?>
	<div class="container py-md-4">
		<div class="welcome-block text-center  wow fadeInUp" data-wow-delay=".1s">
			<div class="section-title pb-md-4">
				<div class="line mb-4"></div>
				<h2 class="mb-4 mb-md-5"><?php echo get_sub_field('title'); ?></h2>
				<p><?php echo get_sub_field('description'); ?></p>
			</div>
		</div>
		<div class="swiper-wrap position-relative">
	       	<div class="swiper-container client-slider  col-md-11 col-10 mx-auto">
				<div class="swiper-wrapper">
                    <?php if (have_rows('logo')) : while (have_rows('logo')) : the_row(); ?>

                        <div class="swiper-slide">
                            <div class="client-img"><img src="<?php echo get_sub_field('icon'); ?>"></div>
                        </div>
                    <?php endwhile; endif; ?>
					
				</div>
			</div>
			<!-- Arrow -->
			<div class="swiper-button-next"><i class="fal fa-angle-right"></i></div>
	      	<div class="swiper-button-prev"><i class="fal fa-angle-left"></i></div>
		</div>
	</div>
<?php endwhile; endif; ?>
</section>

<!-- What our customers are saying  -->
<section  class="testimonials-area pb-5 clearfix">
	<div class="container pb-md-4">
		<div class="welcome-block text-center  wow fadeInUp" data-wow-delay=".1s">
			<div class="section-title pb-md-4">
				<div class="line mb-4"></div>
				<h2 class="mb-4">What our customers are saying</h2>
			</div>
		</div>
		<div class="row g-4 justify-content-center align-items-center">
        <?php $the_query = new WP_Query(array('post_type' => 'case-studies', 'post_status'=>'publish', 'posts_per_page'=>3));
			if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".1s">
                    <div class="testimonials-block">
                        <div class="testimonials-img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid"></div>
                        <div class="testimonials-details">
                            <p><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="link">Read More <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
		</div>
	</div>
</section>

<!-- CTA -->
<section class="cta-sect bg-secondary-color text-center text-md-start text-white clearfix pt-3">
	<div class="container">
		<div class="row justify-content-center justify-content-center g-4">
			<div class="col-md-11">
				<div class="row align-items-center justify-content-center">
					<div class="col-md-5 wow fadeInLeft" data-wow-delay=".3s">
						<div class="cta-img"><img src="<?php echo get_field('cta')['image']; ?>" class="img-fluid w-100"></div>
					</div>
					<div class="col-md-7 py-5 py-md-0 ps-md-5  wow fadeInRight" data-wow-delay=".3s">
						<div class="section-title">
							<h2 class="mb-3 text-white"><?php echo get_field('cta')['title']; ?></h2>
						</div>

						<a href="<?php echo get_field('cta')['button_link']; ?>" class="btn"><?php echo get_field('cta')['button_text']; ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
