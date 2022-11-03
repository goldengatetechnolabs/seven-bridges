<?php get_header(); ?>

<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3"><?php echo get_field("release_notes_banner", "options")['title']; ?></h2>
				</div>
				<p class=""><?php echo get_field("release_notes_banner", "options")['short_description']; ?></p>
			</div>
		</div>
	</div>
</section>

<section  class="nn-sect py-5 clearfix">
	<div class="container py-md-4">
        <div class="row py-4">
            <div class="col-lg-10 col-md-10">
            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <div class="input-group">
                    <div class="form-outline">
                        <input type="search" class="form-control" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" required/>
                    </div>
                    <input type="hidden" name="post_type" value="release-notes">
                    <input type="submit" class="btn btn-primary" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
                </div>
            </form>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Browse by Type</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">New</a></li>
                        <li><a class="dropdown-item" href="#">Improvement</a></li>
                        <li><a class="dropdown-item" href="#">Bug Fix</a></li>
                        <li><a class="dropdown-item" href="#">Release</a></li>
                    </ul>
                </div>
            </div>
        </div>

		<div class="row g-0 my-4">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                $the_query = new WP_Query( 
                                array('post_type' => 'release-notes',
                                    'post_status' => 'publish',
                                    'paged' => $paged,
                                    'posts_per_page' => 3, 	
                                    ) 
                                    );  
            ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
            <?php $terms = get_the_terms( get_the_ID(), 'release-note' ); ?> 
                <div class="col-md-12 col-lg-12 my-4">
                    <p class="primary-light medium mb-2 fs-14"><?php echo get_the_date('M j, Y', '', '', FALSE); ?> <b>|</b>
                        <?php 
                            if (! empty($terms)) {
                            foreach ($terms as $term) {
                        ?>
                                <span  class="tags mb-2"><?php echo $term->name; ?></span> 
                        <?php  } } ?>
                    </p>
                    <h4><b><?php echo the_title(); ?></b></h4>
                    <?php echo the_content(); ?>
                    <p class="mt-4"><a href="<?php the_permalink(); ?>" class="link mt-3">Read More<i class="fas fa-long-arrow-right ms-2"></i></a></p>
                </div><hr>
            <?php endwhile; wp_reset_postdata(); ?>

            <nav aria-label="...">
                <ul class="pagination justify-content-center">
                
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
    </div>
</section>

<?php get_footer(); ?>