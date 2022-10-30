<?php
/**
* Template Name:RHEO
*/
get_header();
?>
<!-- Banner -->
<section class="banner-area inner-banner g-gray py-5 clearfix">
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


<!-- Welcome  -->
<section  class="welcome-area py-5 clearfix">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-12 wow fadeInUp" data-wow-delay=".1s">
				<div class="welcome-block text-center">
					<div class="section-title">
						<div class="line mb-4"></div>
						<h2 class="mb-4"><?php echo get_field("genomics")["title"]; ?></h2>
						<div class="col-md-10 mx-auto">
							<p class="mb-0"><?php echo get_field("genomics")["description"]; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Welcome  -->
<section  class="welcome-area bg-89 text-white py-4 clearfix">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-11 wow fadeInUp" data-wow-delay=".1s">
				<div class="row g-4 justify-content-center align-items-center">
					<div class="col-md-5">
						<div class="build-img"><img src="<?php echo get_field("content")["image"]; ?>" class="img-fluid"></div>
					</div>
					<div class="col-md-7 ps-md-5">
						<div class="section-title">

						 	<h4 class="mb-0 medium lh-base text-white"><?php echo get_field("content")["description"]; ?></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Extended capabilities  -->
<section  class="tt-area py-5 clearfix">
	<div class="container">
		<div class="row g-4 justify-content-between">
			<div class="col-md-5 pe-md-5 wow fadeInLeft" data-wow-delay=".1s">
				<div class="v-tabs-block mt-4">
					<div class="nav flex-column nav-pills" id="v-ARIA-tab" role="tablist" aria-orientation="vertical">
                        <?php $i=0; ?>
	                    <?php if (have_rows('content_1')) : while (have_rows('content_1')) : the_row(); ?>
                        <?php $i++; ?>
                            <button class="nav-link <?php if($i==1){echo "active";} ?>" id="v-pills-ARIA<?php echo $i; ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ARIA<?php echo $i; ?>" type="button" role="tab" aria-controls="v-pills-ARIA<?php echo $i; ?>" aria-selected="<?php echo ($i == 1) ? "true" : 'false'; ?>">
                                <div class="section-title">
                                    <h3 class="mb-0"><?php echo get_sub_field('title'); ?></h3>
                                </div>
                                <p class="mb-0 welcome-p"><?php echo get_sub_field('short_decription'); ?></p>
                            </button>
                        <?php endwhile; endif; ?>
				  	</div>
			  	</div>
			</div>

			<div class="col-md-7 ps-md-5 wow fadeInRight" data-wow-delay=".1s">
				<div class="v-tab-content mt-md-5 pt-md-5">
					<div class="tab-content" id="v-pills-tabContent">
                        <?php $i=0; ?>
	                    <?php if (have_rows('content_1')) : while (have_rows('content_1')) : the_row(); ?>
                        <?php $i++; ?>
					    <div class="tab-pane fade <?php echo ($i == 1) ? "show active" : ''; ?>" id="v-pills-ARIA<?php echo $i; ?>" role="tabpanel" aria-labelledby="v-pills-ARIA<?php echo $i; ?>-tab">
				    		<ul class="list-unstyled list-green">
                                <?php if (have_rows('list')) : while (have_rows('list')) : the_row(); ?>
                                    <li>
                                        <i class="fas fa-check-circle text-green h5 mb-0"></i>
                                        <div class="section-title">
                                            <h4><?php echo get_sub_field('title'); ?></h4>
                                            <p class="welcome-p"><?php echo get_sub_field('description'); ?></p>
                                        </div>
                                    </li>
                                <?php endwhile; endif; ?>	
				    		</ul>
					    </div>
                        <?php endwhile; endif; ?>
				  	</div>
			  	</div>
			</div>
		</div>
	</div>
</section>

<!-- Welcome  -->
<section  class="bg-f4 py-5 clearfix">
    <?php if (have_rows('workflow')) : while (have_rows('workflow')) : the_row(); ?>
        <div class="container py-md-4">
            <div class="section-title mb-5 text-center">
                <div class="line mb-4"></div>
                <h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
                <p class="mb-4 col-md-8 mx-auto"><?php echo get_sub_field('description'); ?></p>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12 wow fadeInUp" data-wow-delay=".1s">
                    <div class="row g-4 justify-content-center">
                        <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                            <div class="col-md-6">
                                <div class="ic-block">
                                    <div class="row g-0 justify-content-center">
                                        <div class="col-md-12 p-4 p-md-5">
                                            <div class="section-title">
                                                <h4 class=""><?php echo get_sub_field('title'); ?></h4>
                                            </div>
                                            <p class="welcome-p mb-0"><?php echo get_sub_field('description'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>

                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>

<!-- PARTNER  -->
<section  class="partner-area py-5 clearfix">
	<div class="container py-md-4">
		<div class="row justify-content-between align-items-center">
			<div class="col-md-6 pe-md-5 wow fadeInLeft" data-wow-delay=".1s">
				<div class="section-title">
					<h4 class="mb-3"><?php echo get_field("expertise")["title"]; ?></h4>
				</div>
				<div class="welcome-p">
					<p><?php echo get_field("expertise")["description"]; ?></p>
					<a href="<?php echo get_field("expertise")["link"]; ?>" class="link"><?php echo get_field("expertise")["link_text"]; ?> <i class="fas fa-long-arrow-right ms-2"></i></a>
				</div>
			</div>
			<div class="col-md-5 wow fadeInRight" data-wow-delay=".1s">
				<div class="info-img"><img src="<?php echo get_field("expertise")["image"]; ?>" class="img-fluid"></div>
			</div>
		</div>
	</div>
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
<?php get_template_part("template-parts/cta-section"); ?>

<?php get_footer(); ?>