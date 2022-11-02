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

<section class="testimonials-area pb-5 clearfix">
	<div class="container pb-md-4">
    <a href="<?php echo get_post_type_archive_link( 'blogs' ); ?>" class="text-danger mb-2"><i class="fas fa-long-arrow-left px-2"></i><b>Back to all blog posts</b></a>
        <h1 class="py-2" style="color: #174C75;"><b><?php single_term_title( ); ?></b></h1>
		<div class="row g-4 mb-5 wow fadeInUp animated" data-wow-delay=".1s">
		<?php while ( have_posts() ) : the_post();?>
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
            <?php post_pagination(); ?>
				<li class="page-item">
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
				</li>
			</ul>
		</nav>
	</div>
</section>

<?php get_footer(); ?>
