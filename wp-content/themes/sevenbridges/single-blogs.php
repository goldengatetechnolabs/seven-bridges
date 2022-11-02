<?php get_header(); ?>

<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix mb-5">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3"><?php echo the_title(); ?></h2>
				</div>
				<p class=""><?php echo get_the_excerpt(); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="testimonials-area pb-5 clearfix">
	<div class="container pb-md-4">
    <a href="<?php echo get_post_type_archive_link( 'blogs' ); ?>" class="text-danger mb-2"><i class="fas fa-long-arrow-left px-2"></i><b>Back to all blog posts</b></a>
		<div class="row g-4 mb-5 wow fadeInUp animated" data-wow-dely=".1s">
            <div class="col-lg-12 col-md-12 py-4">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" width="100%" height="70%">
            </div>
        </div>
        <div class="row" style="padding-left: 150px; padding-right: 150px;">
            <div class="col-lg-12 col-md-12 mb-4">
           <?php $terms = get_the_terms( get_the_ID(), 'blog' ); ?>
                <?php 
                    if (! empty($terms)) {
                    foreach ($terms as $term) {
                        $url = get_term_link($term->slug, 'blog'); ?>
                        <a href="<?php echo $url; ?>"><div class="tags mb-3"><?php echo $term->name; ?></div></a>         
                <?php  } } ?>
                <?php echo the_content(); ?>
            </div>
        </div>
    </div>
</section>


<section class="testimonials-area pb-5 clearfix">
	<div class="container pb-md-4">
        <h1 class="py-4" style="text-align: center;color: #174C75;"><b>Related Blog Posts</b></h1>
		<div class="row g-4 mb-5 wow fadeInUp animated" data-wow-delay=".1s">
        <?php 
        $customTaxonomyTerms = wp_get_object_terms( $post->ID, 'blog', array('fields' => 'ids') ); 
        $args = array(
            'post_type' => 'blogs',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'orderby' => 'rand',
            'tax_query' => array(
                array(
                    'taxonomy' => 'blog',
                    'field' => 'id',
                    'terms' => $customTaxonomyTerms
                )
            ),
            'post__not_in' => array ($post->ID),
        );
            
        //the query
        $relatedPosts = new WP_Query( $args );  ?>
		<?php while ( $relatedPosts->have_posts() ) : $relatedPosts->the_post(); ?>
        <?php $terms = get_the_terms( get_the_ID(), 'blog' ); ?>
            <div class="col-md-4">
				<div class="testimonials-block link-down bg-white shadow-none h-100">
					<div class="testimonials-img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid"></div>
					<div class="testimonials-details px-0">
                        <?php 
                            if (! empty($terms)) {
                            foreach ($terms as $term) {
                                $url = get_term_link($term->slug, 'blog'); ?>
                                <a href="<?php echo $url; ?>"><div class="tags mb-3"><?php echo $term->name; ?></div></a>         
                        <?php  } } ?>
						<div class="section-title"><h4><?php echo the_title(); ?></h4></div>
						<p><?php echo get_the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="link">Read More <i class="fas fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
        <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>