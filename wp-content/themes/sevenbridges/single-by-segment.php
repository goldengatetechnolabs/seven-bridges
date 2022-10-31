<?php get_header(); ?>

<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3"><?php echo the_title(); ?></h2>
				</div>
				<p class=""><?php echo get_field("banner")["short_description"]; ?></p>
			</div>
		</div>
	</div>
</section>

<section  class="py-5 clearfix">
    <?php if (have_rows('content')) : while (have_rows('content')) : the_row(); ?>
        <div class="container py-md-4">
            <div class="section-title mb-5  text-center  wow fadeInUp" data-wow-delay=".3s">
                <div class="line mb-4"></div>
                <h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
                <p class="mb-4 col-md-8 mx-auto"><?php echo get_sub_field('description'); ?></p>
            </div>
            <div class="row g-4  wow fadeInUp" data-wow-delay=".1s">
            <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                <div class="col-md-4">
                    <div class="box d-block h-100">
                        <div class="f-icon text-center mb-4"><img src="<?php echo get_sub_field('icon'); ?>"></div>
                        <h5 class="medium primary-color"><?php echo get_sub_field('title'); ?></h5>
                        <p class="welcome-p mb-0"><?php echo get_sub_field('description'); ?></p>
                    </div>
                </div>
            <?php endwhile; endif; ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>

<!-- The Seven Bridges research collaboration advantage  -->
<section  class="ss-area clearfix">
    <?php if (have_rows('content_1')) : while (have_rows('content_1')) : the_row(); ?>
        <div class="container">
            <?php $i=0; ?>
            <?php if (have_rows('content')) : while (have_rows('content')) : the_row(); ?>
            <?php $i++; ?>
                <div class="row g-4 <?php echo ($i%2 == 1) ? "mb-5" : 'flex-md-row-reverse'; ?> justify-content-between align-items-center ">
                    <div class="col-md-5 wow fadeInLeft" data-wow-delay=".1s">
                        <div class="section-title mb-5 pb-md-5">
                            <?php if($i == 1){echo '<div class="line mb-4 ms-0"></div>';} ?>
                            <h2 class="mb-3"><?php echo get_sub_field('title'); ?></h2>
                            <p class="mb-0"><?php echo get_sub_field('description'); ?></p>
                        </div>

                        <div class="section-title">
                            <h3 class="mb-3"><?php echo get_sub_field('title_1'); ?></h3>
                            <p class="mb-0 welcome-p"><?php echo get_sub_field('description_1'); ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
                        <div class="dd-img text-center ms-md-n3  position-relative">
                            <img src="<?php echo get_sub_field('image'); ?>" class="img-fluid">
                          <?php if(get_sub_field('image_description')){ ?>  <div class="dd-text welcome-p"><?php echo get_sub_field('image_description'); ?></div> <?php } ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    <?php endwhile; endif; ?>
</section>


<!-- Extended capabilities  -->
<?php if(get_field("you_want_to_tab_panel_section") == "Yes"){ ?>
<section  class="tt-area py-5 clearfix">
    <div class="container">
        <div class="row g-4 justify-content-between">
            <div class="col-md-4 pe-md-5 wow fadeInLeft" data-wow-delay=".1s">
                <div class="v-tabs-block mt-4">
                    <div class="nav flex-column nav-pills" id="v-01-tab" role="tablist" aria-orientation="vertical">
                        <?php $active = 0; ?>
                        <?php if (have_rows('tab_pannel')) : while (have_rows('tab_pannel')) : the_row(); ?>
                        <?php $active++; ?>
                            <button class="nav-link text-center <?php if($active==1){echo "active";} ?>" id="v-pills-<?php echo $active; ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?php echo $active; ?>" type="button" role="tab" aria-controls="v-pills-<?php echo $active; ?>" aria-selected="<?php echo ($active == 1) ? "true" : 'false'; ?>">
                                <?php if(get_sub_field('icon')){ ?><img src="<?php echo get_sub_field('icon'); ?>" class="img-fluid"><?php } ?>
                                <?php if(get_sub_field('tab_title')){ ?><h5 class="mb-0 bold primary-color"><?php echo get_sub_field('tab_title'); ?></h5><?php } ?>
                            </button>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-md-8  wow fadeInRight" data-wow-delay=".1s">
                <div class="v-tab-content mt-md-4 pt-md-5">
                    <div class="tab-content" id="v-pills-tabContent">
                        <?php $active = 0; ?>
                        <?php if (have_rows('tab_pannel')) : while (have_rows('tab_pannel')) : the_row(); ?>
                        <?php $active++; ?>
                        <div class="tab-pane welcome-p fade <?php echo ($active == 1) ? "show active" : ''; ?>" id="v-pills-<?php echo $active; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $active; ?>-tab">
                            <div class="section-title mb-4">
                                <h3><?php echo get_sub_field('title'); ?></h3>
                                <h5 class="medium"><?php echo get_sub_field('short_decription'); ?></h5>
                            </div>
                            <?php echo get_sub_field('content'); ?>
                            

                            <a href="<?php echo get_sub_field('link'); ?>" class="link"><?php echo get_sub_field('link_text'); ?> <i class="fas fa-long-arrow-right ms-2"></i></a>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!-- What our customers are saying  -->
<section  class="testimonials-area py-5 clearfix">
	<div class="container pb-md-4">
		<div class="welcome-block text-center  wow fadeInUp" data-wow-delay=".1s">
			<div class="section-title pb-md-4">
				<div class="line mb-4"></div>
				<h2 class="mb-4"><?php echo get_field("customers")["title"]; ?></h2>
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

<!--   -->
<section  class="exp-area py-5 clearfix">
	<div class="container">
        <?php if (have_rows('content_2')) : while (have_rows('content_2')) : the_row(); ?>
            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-md-8 wow fadeInUp" data-wow-delay=".1s">
                    <div class="section-title text-center text-white">
                        <h2 class="text-white"><?php echo get_sub_field('title'); ?></h2>
                        <p class="py-3 mb-0"><?php echo get_sub_field('description'); ?></p>
                    </div>
                
                    <div class="text-center btn-width">
                        <a href="<?php echo get_sub_field('button_link'); ?>" class="btn btn1 border-white m-2"><?php echo get_sub_field('button_text'); ?></a>
                        <a href="<?php echo get_sub_field('button_link_1'); ?>" class="btn m-2"><?php echo get_sub_field('button_text_1'); ?></a>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
	</div>
</section>

<section class="py-5">
    <?php if (have_rows('content_3')) : while (have_rows('content_3')) : the_row(); ?>
        <div class="container">
            <div class="section-title">
                <h4 class="mb-3"><?php echo get_sub_field('title'); ?></h4>
            </div>

            <div class="links-block">
                <ul class="list-unstyled">
                <?php if (have_rows('list')) : while (have_rows('list')) : the_row(); ?>
                        <li><a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('link_text'); ?></a></li>
                <?php endwhile; endif; ?>
                </ul>
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>