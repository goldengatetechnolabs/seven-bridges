<?php
// Testimonial_Short_Code
function shortcode_testimonial()
{ ?>
<div class="swiper-wrap  wow fadeInUp" data-wow-delay=".2s">
    <div class="swiper-container testimonial-slider col-md-10">
        <div class="swiper-wrapper">
        <?php $the_query = new WP_Query(array('post_type' => 'testimonials', 'post_status'=>'publish', 'posts_per_page'=>-1));
			if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="swiper-slide">
                <div class="customer-block text-center">
                    <div class="c-text">
                        <h5 class="primary-color medium mb-4 lh-base"><?php the_content(); ?></h5>

                        <h5 class="primary-color bold"><?php echo the_title(); ?></h5>
                        <h5 class="secondary-color medium"><?php echo get_field("position"); ?></h5>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>

        </div>
    </div>
    <!-- Arrow -->
    <div class="swiper-button-next"><i class="fal fa-angle-right"></i></div>
    <div class="swiper-button-prev"><i class="fal fa-angle-left"></i></div>
</div>

<?php
}
add_shortcode('Testimonial_Shortcode', 'shortcode_testimonial');