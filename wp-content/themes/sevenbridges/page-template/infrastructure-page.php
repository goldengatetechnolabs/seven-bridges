<?php
/**
* Template Name:Infrastructure
*/
get_header();
?>
<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
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


<!-- Foundation  -->
<section  class="foundation-sect py-5 clearfix">
    <?php if (have_rows('content')) : while (have_rows('content')) : the_row(); ?>
        <div class="container py-md-4">
            <div class="section-title mb-5 text-center  wow fadeInUp" data-wow-delay=".1s">
                <div class="line mb-4"></div>
                <h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
                <p class="mb-4 col-md-8 mx-auto"><?php echo get_sub_field('description'); ?></p>
            </div>

            <div class="row g-4 justify-content-center wow fadeInUp" data-wow-delay=".2s">
                <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                    <div class="col-md-3">
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

<!-- research  -->
<section  class="pt-5 clearfix">
    <?php if (have_rows('research')) : while (have_rows('research')) : the_row(); ?>
        <div class="container pt-md-4">
            <div class="section-title mb-5 text-center  wow fadeInUp" data-wow-delay=".3s">
                <div class="line mb-4"></div>
                <h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
                <p class="mb-4 col-md-10 mx-auto"><?php echo get_sub_field('decription'); ?></p>
            </div>

            <div class="row g-4 justify-content-center">
                <?php if (have_rows('card_1')) : while (have_rows('card_1')) : the_row(); ?>
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".1s">
                        <div class="box d-block p-4 p-md-5 h-100">
                            <div class="section-title">
                                <h4 class="mb-3"><?php echo get_sub_field('title'); ?></h4>
                            </div>
                            <div class="welcome-p">
                                <p><?php echo get_sub_field('description'); ?></p>

                                <ul class="list mb-0">
                                    <?php if (have_rows('list')) : while (have_rows('list')) : the_row(); ?>
                                        <li><?php echo get_sub_field('item'); ?></li>
                                    <?php endwhile; endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>

                <!-- <div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
                    <div class="box d-block p-4 p-md-5 h-100">
                        <div class="section-title">
                            <h4 class="mb-3">Reduce processing time</h4>
                        </div>
                        <div class="welcome-p">
                            <p>Elastic scaling significantly reduces processing time for any given pipeline. For example, you can complete a GATK 4-based Whole Genome Sequencing analysis pipeline in 3-4 hours".</p>

                            <ul class="list mb-0">
                                <li>Over 8x faster than a typical execution carried out on a single cloud-based node.</li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>

<!-- Multiple infrastructure options  -->
<section  class="py-5 clearfix">
    <?php if (have_rows('multiple_infrastructure')) : while (have_rows('multiple_infrastructure')) : the_row(); ?>

        <div class="container py-md-4">
            <div class="section-title mb-5 text-center  wow fadeInUp" data-wow-delay=".3s">
                <div class="line mb-4"></div>
                <h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
                <p class="mb-4 col-md-10 mx-auto"><?php echo get_sub_field('description'); ?></p>
            </div>
            <?php $i=0; ?>
            <?php if (have_rows('content')) : while (have_rows('content')) : the_row(); ?>
            <?php $i++; ?>
                <div class="row g-4 <?php echo ($i%2 == 1) ? "" : 'flex-md-row-reverse'; ?> justify-content-center align-items-center clearfix mb-5 py-md-4">
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".1s">
                        <div class="section-title">
                            <h4 class="mb-3"><?php echo get_sub_field('title'); ?></h4>
                        </div>
                        <div class="welcome-p">
                            <?php echo get_sub_field('short_description'); ?>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
                        <div class="how-img  small-style "><img src="<?php echo get_sub_field('image'); ?>" class="img-fluid br-0"></div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    <?php endwhile; endif; ?>

</section>

<!-- Draw on our expertise to accelerate discovery  -->
<section  class="exp-area py-5 clearfix">
    <?php if (have_rows('robust_and_compliant')) : while (have_rows('robust_and_compliant')) : the_row(); ?>
        <div class="container">
            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-md-7 wow fadeInLeft" data-wow-delay=".1s">
                    <div class="section-title text-white">
                        <h3 class="text-white"><?php echo get_sub_field('title'); ?></h3>
                        <p class="mb-0"><?php echo get_sub_field('description'); ?></p>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInRight" data-wow-delay=".1s">
                    <div class="text-center">
                        <a href="<?php echo get_sub_field('button_link'); ?>" class="btn btn1 border-white"><?php echo get_sub_field('button_text'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>

<!-- research  -->
<section  class="py-5 clearfix">
<?php if (have_rows('ecosystem')) : while (have_rows('ecosystem')) : the_row(); ?>
	<div class="container py-md-4">
		<div class="section-title mb-5 text-center  wow fadeInUp" data-wow-delay=".3s">
			<div class="line mb-4"></div>
			<h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
			<p class="mb-4 col-md-7 mx-auto"><?php echo get_sub_field('decription'); ?></p>
		</div>

		<div class="row g-4 justify-content-center">
            <?php if (have_rows('card_1')) : while (have_rows('card_1')) : the_row(); ?>
                <div class="col-md-6 wow fadeInLeft" data-wow-delay=".1s">
                    <div class="box d-block p-4 p-md-5 h-100 position-relative">
                        <div class="section-title">
                            <h4 class="mb-3"><?php echo get_sub_field('title'); ?></h4>
                        </div>
                        <div class="box-light-ttl"><?php echo get_sub_field('title'); ?></div>
                        <div class="welcome-p">
                            <p><?php echo get_sub_field('description'); ?></p>

                            <ul class="list mb-0">
                                <?php if (have_rows('list')) : while (have_rows('list')) : the_row(); ?>
                                    <li><?php echo get_sub_field('item'); ?></li>
                                <?php endwhile; endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
		</div>
	</div>
<?php endwhile; endif; ?>

</section>

<!-- Case Study  -->
<section  class="case-area pb-5 clearfix">
	<div class="container pb-md-4 wow fadeInUp" data-wow-delay=".1s">
		<div class="ic-block  bg-f4 mh-auto">
			<div class="row justify-content-center">
				<div class="col-md-3">
					<div class="ic-img bg-white"><img src="<?php echo get_field("case_study")["image"]; ?>" class="img-fluid"></div>
				</div>
				<div class="col-md-9 px-5 py-4 my-md-3">
					<div class="section-title"><h4><?php echo get_field("case_study")["title"]; ?></h4></div>
					<p class="welcome-p"><?php echo get_field("case_study")["description"]; ?></p>
					<a href="<?php echo get_field("case_study")["link"]; ?>" class="link"><?php echo get_field("case_study")["link_text"]; ?> <i class="fas fa-long-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- CTA -->
<?php get_template_part("template-parts/cta-section"); ?>

<?php get_footer(); ?>