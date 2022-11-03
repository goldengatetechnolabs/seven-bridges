<?php get_header(); ?>

<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3"><?php echo get_field("insights_banner", "options")['title']; ?></h2>
				</div>
				<p class=""><?php echo get_field("insights_banner", "options")['short_description']; ?></p>
			</div>
		</div>
	</div>
</section>

<section  class="py-5 clearfix">
	<div class="container py-md-4">
		<div class="row g-4 justify-content-center align-items-center clearfix">
			<div class="col-md-8 wow fadeInLeft" data-wow-delay=".1s">
				<div class="section-title">
					<h3 class="text-uppercase ls-5 primary-light">FEATURED</h3>
					<h2 class="mb-3">Comprehensive data management solution for single-cell RNA-seq data</h2>
				</div>
				<div class="welcome-p">
					<p>A large pharmaceutical company produced datasets, particularly for single-cell RNA sequencing data, that were de-centralized and siloed. Due to the lack of prior knowledge of the results of different research groups, researchers were unable to identify which datasets were already available, compromising the full potential of the data.</p>

					<a href="" class="link">Read Case Study <i class="fas fa-long-arrow-right ms-2"></i></a>
				</div>
			</div>

			<div class="col-md-4 wow fadeInRight" data-wow-delay=".1s">
				<div class="how-img img-style small-style both-red"><img src="images/ff.jpg" class="img-fluid br-0"></div>
			</div>
		</div>
	</div>
</section>

<!-- Case Studies  -->
<section  class="customer-area pt-4 pb-5 mb-md-4 clearfix">
	<div class="container">
		<div class="row justify-content-center mb-5 wow fadeInUp" data-wow-delay=".1s">
			<div class="col-md-4">
				<div class="welcome-block">
					<div class="section-title pb-md-2">
						<h2 class="mb-2"><?php echo get_field("case_studies_insights", "options")['title']; ?></h2>
						<p><?php echo get_field("case_studies_insights", "options")['description']; ?></p>
					</div>
					<a href="<?php echo get_post_type_archive_link( 'case-studies' ); ?>" class="link">View All <i class="fas fa-long-arrow-right ms-2"></i></a>
				</div>
			</div>


			<?php $the_query = new WP_Query( 
			array('post_type' => 'case-studies',
			'post_status' => 'publish',
			'posts_per_page' => 2,
			) );  ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
				<div class="col-md-4">
					<div class="testimonials-block">
						<div class="testimonials-img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid"></div>
						<div class="testimonials-details">
						<div class="section-title"><h4><?php echo the_title(); ?></h4></div>
							<p><?php echo get_the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="link">Read More <i class="fas fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>

		<div class="row g-4 justify-content-center wow fadeInUp" data-wow-delay=".1s">
			<div class="col-md-4">
				<div class="welcome-block">
					<div class="section-title pb-md-2">
						<h2 class="mb-2"><?php echo get_field("publications_insights", "options")['title']; ?></h2>
						<p><?php echo get_field("publications_insights", "options")['description']; ?></p>
					</div>
					<a href="<?php echo get_post_type_archive_link( 'publications' ); ?>" class="link">View All <i class="fas fa-long-arrow-right ms-2"></i></a>
				</div>
			</div>
			<?php $the_query = new WP_Query( 
			array('post_type' => 'publications',
			'post_status' => 'publish',
			'posts_per_page' => 2,
			) );  ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
				<div class="col-md-4">
					<div class="testimonials-block">
						<div class="testimonials-img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid"></div>
						<div class="testimonials-details">
						<div class="section-title"><h4><?php echo the_title(); ?></h4></div>
							<p><?php echo get_the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="link">Read More <i class="fas fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>

		<div class="row g-4 justify-content-center wow fadeInUp" data-wow-delay=".1s">
			<div class="col-md-4">
				<div class="welcome-block">
					<div class="section-title pb-md-2">
						<h2 class="mb-2"><?php echo get_field("white_papers_insights", "options")['title']; ?></h2>
						<p><?php echo get_field("white_papers_insights", "options")['description']; ?></p>
					</div>
					<a href="<?php echo get_post_type_archive_link( 'white-papers' ); ?>" class="link">View All <i class="fas fa-long-arrow-right ms-2"></i></a>
				</div>
			</div>
			<?php $the_query = new WP_Query( 
			array('post_type' => 'white-papers',
			'post_status' => 'publish',
			'posts_per_page' => 2,
			) );  ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
				<div class="col-md-4">
					<div class="testimonials-block">
						<div class="testimonials-img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid"></div>
						<div class="testimonials-details">
						<div class="section-title"><h4><?php echo the_title(); ?></h4></div>
							<p><?php echo get_the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="link">Read More <i class="fas fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>

		<div class="row g-4 justify-content-center wow fadeInUp" data-wow-delay=".1s">
			<div class="col-md-4">
				<div class="welcome-block">
					<div class="section-title pb-md-2">
						<h2 class="mb-2"><?php echo get_field("blog_insights", "options")['title']; ?></h2>
						<p><?php echo get_field("blog_insights", "options")['description']; ?></p>
					</div>
					<a href="<?php echo get_post_type_archive_link( 'blogs' ); ?>" class="link">View All <i class="fas fa-long-arrow-right ms-2"></i></a>
				</div>
			</div>
			<?php $the_query = new WP_Query( 
			array('post_type' => 'blogs',
			'post_status' => 'publish',
			'posts_per_page' => 2,
			) );  ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
				<div class="col-md-4">
					<div class="testimonials-block">
						<div class="testimonials-img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid"></div>
						<div class="testimonials-details">
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
