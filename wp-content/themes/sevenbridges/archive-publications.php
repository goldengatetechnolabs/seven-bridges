<?php get_header(); ?>


<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3"><?php echo get_field("publication_banner", "options")['title']; ?></h2>
				</div>
				<p class=""><?php echo get_field("publication_banner", "options")['description']; ?></p>
			</div>
		</div>
	</div>
</section>

<section  class="py-5 clearfix">
	<div class="container py-md-4">
		<div class="row g-4 justify-content-center align-items-center clearfix">
			<div class="col-md-8 wow fadeInLeft" data-wow-delay=".1s">
				<div class="section-title">
					<!-- <h3 class="text-uppercase ls-5 primary-light">FEATURED</h3> -->
					<h2 class="mb-3">Open access policy</h2>
				</div>
				<div class="welcome-p">
					<p>We are committed to supporting the rapid dissemination of scientific knowledge. Seven Bridges pays the open access fees for publications our customers write based on research they did using our software.</p>

					<a href="" class="link">Learn More<i class="fas fa-long-arrow-right ms-2"></i></a>
				</div>
			</div>

			<div class="col-md-4 wow fadeInRight" data-wow-delay=".1s">
				<div class="how-img img-style small-style both-red"><img src="images/testimonials/t02.png" class="img-fluid br-0"></div>
			</div>
		</div>
	</div>
</section>

<section  class="clearfix">
	<div class="container py-md-4">
        <h5>
            <?php 
                $terms = get_terms( array(
                    'taxonomy' => 'publication',
                    'hide_empty' => false,
                ));
			?>
            <?php 
                if (! empty($terms)) {
                    foreach ($terms as $term) { 
                        
                        echo $term->name;
                        if(($term->name) == 'With our products'){
                            echo "";
                        }else{
                        echo "  |  "    ;   
                        } 
                    } 
                } 
            ?>
        </h5>
    </div>
</section>  


<section  class="py-5 clearfix">
	<div class="container">
		<div class="section-title mb-5 wow fadeInUp" data-wow-delay=".3s">
			<h2 class="mb-4">Latest articles from our scientists</h2>
		</div>
		<div class="row g-4  wow fadeInUp" data-wow-delay=".1s">
        <?php $slug = get_query_var('from-our-scientists'); ?>

        <?php
            $args = array(
                'post_type' => 'publications',
                'post_status' => 'publish',
                
                'orderby' => 'rand',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'publication',
                        'field' => 'slug',
                        'terms' => 'from-our-scientists'
                      )
                ),
            ); 
        ?>
          <?php  $query = new WP_Query( $args );  ?>
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="col-md-4">
				<div class="box d-block h-100">
					<h5 class="medium primary-color"><?php echo the_title(); ?></h5>
					<p class="welcome-p mb-0"><?php echo get_the_excerpt(); ?></p>
                    <p class="mt-4"><a href="<?php the_permalink(); ?>" class="link mt-3">Read More <i class="fas fa-long-arrow-right ms-2"></i></a></p>
				</div>
			</div>
          <?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<section  class="py-5 clearfix">
	<div class="container">
		<div class="section-title mb-5 wow fadeInUp" data-wow-delay=".3s">
			<h2 class="mb-4">Research done with our products</h2>
		</div>
		<div class="row g-4  wow fadeInUp" data-wow-delay=".1s">
        <?php $slug = get_query_var('from-our-scientists'); ?>

        <?php
            $args = array(
                'post_type' => 'publications',
                'post_status' => 'publish',
                
                'orderby' => 'rand',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'publication',
                        'field' => 'slug',
                        'terms' => 'with-our-products'
                      )
                ),
            ); 
        ?>
          <?php  $query = new WP_Query( $args );  ?>
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="col-md-4">
				<div class="box d-block h-100">
					<h5 class="medium primary-color"><?php echo the_title(); ?></h5>
					<p class="welcome-p mb-0"><?php echo get_the_excerpt(); ?></p>
                    <p class="mt-4"><a href="<?php the_permalink(); ?>" class="link mt-3">Read More <i class="fas fa-long-arrow-right ms-2"></i></a></p>
				</div>
			</div>
          <?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<section  class="py-5 clearfix">
	<div class="container">
		<div class="section-title mb-5 wow fadeInUp" data-wow-delay=".3s">
			<h2 class="mb-4">Our recent conference presentations</h2>
		</div>
		<div class="row g-4  wow fadeInUp" data-wow-delay=".1s">
        <?php $slug = get_query_var('from-our-scientists'); ?>

        <?php
            $args = array(
                'post_type' => 'publications',
                'post_status' => 'publish',
                
                'orderby' => 'rand',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'publication',
                        'field' => 'slug',
                        'terms' => 'conference-presentations'
                      )
                ),
            ); 
        ?>
          <?php  $query = new WP_Query( $args );  ?>
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="col-md-4">
				<div class="box d-block h-100">
					<h5 class="medium primary-color"><?php echo the_title(); ?></h5>
					<p class="welcome-p mb-0"><?php echo get_the_excerpt(); ?></p>
                    <p class="mt-4"><a href="<?php the_permalink(); ?>" class="link mt-3">Read More <i class="fas fa-long-arrow-right ms-2"></i></a></p>
				</div>
			</div>
          <?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<section  class="py-5 clearfix">
	<div class="container">
		<div class="section-title mb-5 wow fadeInUp" data-wow-delay=".3s">
			<h2 class="mb-4">Further reading: a selection of our favorite articles</h2>
		</div>
		<div class="row g-4  wow fadeInUp" data-wow-delay=".1s">
        <?php $slug = get_query_var('from-our-scientists'); ?>

        <?php
            $args = array(
                'post_type' => 'publications',
                'post_status' => 'publish',
                
                'orderby' => 'rand',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'publication',
                        'field' => 'slug',
                        'terms' => 'further-reading'
                      )
                ),
            ); 
        ?>
          <?php  $query = new WP_Query( $args );  ?>
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="col-md-4">
				<div class="box d-block h-100">
					<h5 class="medium primary-color"><?php echo the_title(); ?></h5>
					<p class="welcome-p mb-0"><?php echo get_the_excerpt(); ?></p>
                    <p class="mt-4"><a href="<?php the_permalink(); ?>" class="link mt-3">Read More <i class="fas fa-long-arrow-right ms-2"></i></a></p>
				</div>
			</div>
          <?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>