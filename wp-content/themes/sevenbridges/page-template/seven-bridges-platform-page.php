<?php
/**
* Template Name:Seven Bridges Platform 
*/
get_header();
?>

<!-- Banner -->
<?php get_template_part("template-parts/banner-one"); ?>

<!-- Welcome  -->
<section  class="welcome-area py-5 clearfix">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-11 wow fadeInUp" data-wow-delay=".1s">
				<div class="welcome-block text-center">
					<div class="section-title">
						<div class="line"></div>
						<h2 class="mb-4"><?php echo get_field("foundation")["title"]; ?></h2>
						<p class="mb-0"><?php echo get_field("foundation")["description"]; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Bioinformatics will soon drive R&D  -->
<section  class="bio-area pb-5 clearfix">
	<div class="container pb-md-5">
		<div class="row g-4 justify-content-between align-items-center">
			<div class="col-md-6 pe-md-5 wow fadeInLeft" data-wow-delay=".1s">
				<div class="pp-img">
					<img src="<?php echo get_field("the_platform")["image"]; ?>" class="img-fluid">
					<div class="section-title text-center">
						<h5 class="mb-0  medium"><?php echo get_field("the_platform")["short_description"]; ?></h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
				<div class="section-title">
					<h4 class="mb-3"><?php echo get_field("the_platform")["title"]; ?></h4>
				</div>
				<p class="welcome-p"><?php echo get_field("the_platform")["description"]; ?></p>
			</div>
		</div>
	</div>
</section>

<!-- How it works -->
<section class="how-area py-5 clearfix">
	<?php if (have_rows('how_it_works')) : while (have_rows('how_it_works')) : the_row(); ?>
		<div class="container">
			<div class="section-title pb-4  text-center wow fadeInUp" data-wow-delay=".1s">
				<div class="line"></div>
				<h2 class="mb-3"><?php echo get_sub_field('title'); ?></h2>
			</div>
			<?php if (have_rows('content')) : while (have_rows('content')) : the_row(); ?>
			<?php if(get_sub_field('select')=='Left'){ ?>
				<div class="row g-4 justify-content-center align-items-center clearfix mb-5">
					<div class="col-md-6 wow fadeInLeft" data-wow-delay=".1s">
						<div class="section-title">
							<h4 class="mb-3"><?php echo get_sub_field('title'); ?></h4>
						</div>
						
						<p class="welcome-p"><?php echo get_sub_field('description'); ?></p>

						<a href="<?php echo get_sub_field('link'); ?>" class="link">Learn More <i class="fas fa-long-arrow-right ms-2"></i></a>
					</div>

					<div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
						<div class="how-img img-style small-style both-blue"><img src="<?php echo get_sub_field('image'); ?>" class="img-fluid br-0"></div>
					</div>
				</div>
			<?php }else{ ?>
				<div class="row flex-md-row-reverse g-4 justify-content-center align-items-center clearfix mb-5">
					<div class="col-md-6 wow fadeInLeft" data-wow-delay=".1s">
						<div class="section-title">
							<h4 class="mb-3"><?php echo get_sub_field('title'); ?></h4>
						</div>
						<p class="welcome-p"><?php echo get_sub_field('description'); ?><p>

						<a href="<?php echo get_sub_field('link'); ?>" class="link">Learn More <i class="fas fa-long-arrow-right ms-2"></i></a>
					</div>

					<div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
						<div class="how-img img-style small-style both-blue"><img src="<?php echo get_sub_field('image'); ?>" class="img-fluid br-0"></div>
					</div>
				</div>
			<?php } ?>
			<?php endwhile; endif; ?>
		</div>
	<?php endwhile; endif; ?>
</section>

<!-- Draw on our expertise to accelerate discovery  -->
<section  class="exp-area py-5 clearfix">
	<div class="container">
		<div class="row g-4 justify-content-center align-items-center">
			<div class="col-md-7 wow fadeInLeft" data-wow-delay=".1s">
				<div class="section-title text-white">
					<h3 class="text-white"><?php echo get_field("expertise")["title"]; ?></h3>
					<p class="mb-0"><?php echo get_field("expertise")["description"]; ?></p>
				</div>
			</div>
			<div class="col-md-3 wow fadeInRight" data-wow-delay=".1s">
				<div class="text-center">
					<a href="<?php echo get_field("expertise")["button_link"]; ?>" class="btn btn1 border-white"><?php echo get_field("expertise")["button_text"]; ?></a>
				</div>
			</div>
		</div>
	</div>
</section>


<section  class="logo-area py-5 text-center clearfix  wow fadeInUp" data-wow-delay=".1s">
	<?php if (have_rows('public_datasets')) : while (have_rows('public_datasets')) : the_row(); ?>
		<div class="container">
			<div class="section-title mb-4">
				<h4 class="medium"><?php echo get_sub_field('title'); ?></h4>
			</div>
			<div class="logo-block">
				<?php if (have_rows('icons')) : while (have_rows('icons')) : the_row(); ?>
					<div class="l01"><img src="<?php echo get_sub_field('icon'); ?>" class="img-fluid"></div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	<?php endwhile; endif; ?>
</section>

<!-- Accuracy -->
<section class="accuracy-area py-5 clearfix">
	<?php if (have_rows('accuracy')) : while (have_rows('accuracy')) : the_row(); ?>
		<div class="container py-md-4">
			<div class="section-title pb-4 col-md-10 mx-auto  text-center wow fadeInUp" data-wow-delay=".1s">
				<div class="line"></div>
				<h2 class="mb-3"><?php echo get_sub_field('title'); ?></h2>
				<p class="welcome-p text-center"><?php echo get_sub_field('description'); ?></p>
			</div>

			<div class="row g-4 icon-sect">
				<?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
					<div class="col-md-6 wow fadeInUp" data-wow-delay=".1s">
						<div class="discovery-block p-xxl-5">
							<div class="section-title">
								<h4 class="primary-color"><?php echo get_sub_field('title'); ?></h4>
							</div>
							<p class="welcome-p"><?php echo get_sub_field('short_description'); ?></p>
							<a href="<?php echo get_sub_field('link'); ?>" class="link"><?php echo get_sub_field('link_text'); ?> <i class="fas fa-long-arrow-right ms-2"></i></a>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	<?php endwhile; endif; ?>
</section>

<!-- Extended capabilities  -->
<section  class="capabilities-area mb-5 clearfix">
	<?php if (have_rows('capabilities')) : while (have_rows('capabilities')) : the_row(); ?>
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-md-6 pe-md-5 wow fadeInLeft" data-wow-delay=".1s">
					<div class="section-title">
						<h4 class="mb-3"><?php echo get_sub_field('title'); ?></h4>
					</div>
					<p class="welcome-p col-xxl-10"><?php echo get_sub_field('short_decription'); ?></p>

					<div class="v-tabs-block mt-4 mb-5">
						<div class="nav flex-column nav-pills" id="v-ARIA-tab" role="tablist" aria-orientation="vertical">
							<?php $active = 0; ?>
							<?php if (have_rows('content')) : while (have_rows('content')) : the_row(); ?>
							<?php $active++; ?>
								<button class="nav-link <?php if($active==1){echo "active";} ?>" id="v-pills-<?php echo get_sub_field('title'); ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?php echo get_sub_field('title'); ?>" type="button" role="tab" aria-controls="v-pills-<?php echo get_sub_field('title'); ?>" aria-selected="<?php echo ($active == 1) ? "true" : 'false'; ?>">
									<div class="section-title">
										<h3 class="mb-0"><?php echo get_sub_field('title'); ?></h3>
									</div>
									<p class="mb-0"><?php echo get_sub_field('description'); ?></p>
								</button>
							<?php endwhile; endif; ?>
						</div>
					</div>
					<?php if (have_rows('get_started')) : while (have_rows('get_started')) : the_row(); ?>
						<div class="v-tabs-block mt-4 px-4">
							<p class="welcome-p"><?php echo get_sub_field('short_description'); ?></p>
							<a href="<?php echo get_sub_field('button_link'); ?>" class="btn btn1"><?php echo get_sub_field('button_text'); ?></a>
						</div>
					<?php endwhile; endif; ?>
				</div>

				<div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
					<div class="v-tab-content">
						<div class="tab-content" id="v-pills-tabContent">
							<?php $active = 0; ?>
							<?php if (have_rows('content')) : while (have_rows('content')) : the_row(); ?>
							<?php $active++; ?>
								<div class="tab-pane fade <?php echo ($active == 1) ? "show active" : ''; ?> " id="v-pills-<?php echo get_sub_field('title'); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo get_sub_field('title'); ?>-tab">
									<div class="v-img"><img src="<?php echo get_sub_field('image'); ?>" class="img-fluid"></div>
								</div>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>
</section>


<!-- CTA -->
<?php get_template_part("template-parts/cta-section"); ?>

<?php get_footer(); ?>