<?php get_header(); ?>

<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3"><?php echo get_field("blog_banner", "options")['title']; ?></h2>
				</div>
				<p class=""><?php echo get_field("blog_banner", "options")['description']; ?></p>
			</div>
		</div>
	</div>
</section>

<section  class="blogs-sect py-5 clearfix">
	<div class="container py-md-4">
        <?php $the_query = new WP_Query( array('post_type' => 'blogs','post_status' => 'publish','posts_per_page' => 1,	) );  ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
        <?php $terms = get_the_terms( get_the_ID(), 'blog' ); ?>
		<div class="row justify-content-center g-4  wow fadeInUp" data-wow-delay=".3s">
			<div class="col-md-8">
                <?php 
                    if (! empty($terms)) {
                    foreach ($terms as $term) {
                        $url = get_term_link($term->slug, 'blog'); ?>
                        <a href="<?php echo $url; ?>"><div class="tags mb-3"><?php echo $term->name; ?></div></a>         
                <?php  } } ?>
				<div class="section-title">
					<h2 class=""><?php echo the_title(); ?></h2>
				</div>
				<p class="welcome-p"><?php echo get_the_excerpt(); ?></p>
				
				<a href="<?php the_permalink(); ?>" class="link">Read More <i class="fas fa-long-arrow-right ms-2"></i></a>
			</div>
			<div class="col-md-4">
				<div class="how-img img-style small-style both-red"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid br-0"></div>
			</div>
		</div>
        <?php endwhile; wp_reset_postdata(); ?>
	</div>
</section>

<section class="testimonials-area pb-5 clearfix">
	<div class="container pb-md-4">
		<div class="row g-4 mb-5 wow fadeInUp animated" data-wow-delay=".1s">
        <?php $the_query = new WP_Query( array('post_type' => 'blogs','post_status' => 'publish','posts_per_page' => 9, 'offset'=> 1,	) );  ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
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

		<nav aria-label="...">
			<ul class="pagination justify-content-center">
			<?php echo paginate_links(); ?>
				<!-- <li class="page-item">
					<a class="page-link" href="#"><i class="fas fa-angle-left"></i></a>
				</li>
				<li class="page-item active"  aria-current="page"><a class="page-link" href="#">1</a></li>
				<li class="page-item">
					<a class="page-link" href="#">2</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">...</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">8</a></li>
				<li class="page-item"><a class="page-link" href="#">9</a></li>
				<li class="page-item">
					<a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
				</li> -->
			</ul>
		</nav>
	</div>
</section>

<?php get_footer(); ?>
