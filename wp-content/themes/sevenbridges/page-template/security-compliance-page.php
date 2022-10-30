<?php
/**
* Template Name:Security & Compliance
*/
get_header();
?>

<!-- Banner -->
<section class="banner-area inner-banner gradient-red py-5 clearfix">
	<div class="container">
		<div class="row justify-content-between g-4">
			<div class="col-md-10 wow fadeInUp" data-wow-delay=".3s">
				<div class="section-title banner-title">
					<h2 class="exbold text-white my-3"><?php echo get_field("banner")["title"]; ?></h2>
				</div>
				<p class="col-md-8"><?php echo get_field("banner")["short_description"]; ?></p>
			</div>
		</div>
	</div>
</section>

<!-- Clients  -->
<section  class="clients-area py-5 clearfix">
	<div class="container py-md-4">
        <?php if (have_rows('maintain_industry')) : while (have_rows('maintain_industry')) : the_row(); ?>
            <div class="welcome-block col-md-11 mx-auto text-center  wow fadeInUp" data-wow-delay=".1s">
                <div class="section-title pb-md-4">
                    <div class="line mb-4"></div>
                    <h2 class="mb-4 mb-md-5 col-xxl-10 mx-auto"><?php echo get_sub_field('title'); ?></h2>
                </div>
            
                <div class="swiper-wrap position-relative">
                    <div class="swiper-container security-slider  col-md-11 col-10 mx-auto">
                        <div class="swiper-wrapper">

                        <?php if (have_rows('logo_slider')) : while (have_rows('logo_slider')) : the_row(); ?>
                            <div class="swiper-slide">
                                <div class="client-img"><img src="<?php echo get_sub_field('logo'); ?>"></div>
                            </div>
                        <?php endwhile; endif; ?>
                            
                        </div>
                    </div>
                    <!-- Arrow -->
                    <div class="swiper-button-next"><i class="fal fa-angle-right"></i></div>
                    <div class="swiper-button-prev"><i class="fal fa-angle-left"></i></div>
                </div>
            </div>
        <?php endwhile; endif; ?>
	</div>
</section>

<!-- box  -->
<section  class="box-area pb-5 clearfix">
    <?php if (have_rows('information_security')) : while (have_rows('information_security')) : the_row(); ?>
        <div class="container pb-md-4">
            <div class="welcome-block  wow fadeInUp" data-wow-delay=".1s">
                <div class="section-title text-center  pb-md-4">
                    <h4 class="mb-4 mb-md-5 col-xxl-10 mx-auto"><?php echo get_sub_field('title'); ?></h4>
                </div>

                <div class="row justify-content-center g-4">
                    <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                        <div class="col-md-3">
                            <div class="box d-block h-100">
                                <h5 class="primary-color medium"><?php echo get_sub_field('title'); ?></h5>
                                <p class="welcome-p"><?php echo get_sub_field('description'); ?></p>

                                <a href="<?php echo get_sub_field('link'); ?>" class="link"><?php echo get_sub_field('link_text'); ?><i class="fas fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>

<!-- Key Security Features  -->
<section  class="key-area bg-f4 py-5 clearfix">
    <?php if (have_rows('key_security')) : while (have_rows('key_security')) : the_row(); ?>
        <div class="container py-md-4">
            <div class="welcome-block col-md-8 mx-auto text-center  wow fadeInUp" data-wow-delay=".1s">
                <div class="section-title pb-md-4">
                    <div class="line mb-4"></div>
                    <h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
                    <p><?php echo get_sub_field('description'); ?></p>
                </div>
            </div>

            <div class="row justify-content-center g-4  wow fadeInUp" data-wow-delay=".3s">
                
                <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                    <div class="col-md-4">
                        <div class="ic-block text-center">
                            <div class="row g-0 justify-content-center">
                                <div class="col-md-12 p-4">
                                    <div class="section-title">
                                        <h4 class=""><?php echo get_sub_field('title'); ?></h4>
                                    </div>
                                    <p class="welcome-p mb-0"><?php echo get_sub_field('short_description'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>	
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>

<!-- Did you know?  -->
<section  class="exp-area py-5 clearfix">
    <?php if (have_rows('did_you_know')) : while (have_rows('did_you_know')) : the_row(); ?>
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

<!-- Compliance: Industry leading compliance and regulatory standards  -->
<section  class="tb-sect text-center py-5 clearfix">
    <?php if (have_rows('industry_leading')) : while (have_rows('industry_leading')) : the_row(); ?>
        <div class="container pt-md-4">
            <div class="welcome-block  col-md-8 mx-auto  wow fadeInUp" data-wow-delay=".1s">
                <div class="section-title text-center   pb-md-4">
                    <div class="line mb-4"></div>
                    <h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
                </div>
            </div>

            <div class="table-responsive wow fadeInUp" data-wow-delay=".3s">
                <?php if (have_rows('table')) : while (have_rows('table')) : the_row(); ?>
                    <table class="table table-style table-striped welcome-p bg-f2">
                        <thead>
                            <?php if (have_rows('table_header')) : while (have_rows('table_header')) : the_row(); ?>
                                <th width="<?php echo get_sub_field('column_width'); ?>"><?php echo get_sub_field('header_data'); ?></th>
                            <?php endwhile; endif; ?>
                        </thead>
                        <tbody>
                            <?php if (have_rows('table_row')) : while (have_rows('table_row')) : the_row(); ?>
                                <tr>
                                    <td><img src="<?php echo get_sub_field('icon_1'); ?>" class="img-fluid"></td>
                                    <td><?php if(get_sub_field('select')== "Checked"){ ?><i class="fal fa-check"></i> <?php } ?></td>
                                    <td><?php echo get_sub_field('data'); ?></td>
                                    <td class="text-start"><?php echo get_sub_field('short_description'); ?></td>
                                </tr>
                            <?php endwhile; endif; ?>
                        </tbody>
                    </table>
                <?php endwhile; endif; ?>
            </div>

            <ol class="small text-start ps-3">
                <?php if (have_rows('list')) : while (have_rows('list')) : the_row(); ?>
                    <li><?php echo get_sub_field('item'); ?></li>
                <?php endwhile; endif; ?>
            </ol>
        </div>
    <?php endwhile; endif; ?>
</section>


<!-- Quality Management: R&D to Clinical Trials  -->
<section  class="data-privacy-sect bg-f4 py-5 mb-5 clearfix">
    <?php if (have_rows('quality_management')) : while (have_rows('quality_management')) : the_row(); ?>
        <div class="container py-md-4">
            <div class="welcome-block  col-md-8 mx-auto  wow fadeInUp" data-wow-delay=".1s">
                <div class="section-title text-center   pb-md-4">
                    <div class="line mb-4"></div>
                    <h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
                    <p><?php echo get_sub_field('description'); ?></p>
                </div>
            </div>
            <div class="row g-3 gx-md-4 gy-md-5 wow fadeInUp" data-wow-delay=".1s">
            <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                <div class="col-md-4">
                    <div class="exp-block">
                        <i class="fas fa-check-circle text-green"></i>
                        <h5 class="bold mb-0"><?php echo get_sub_field('title'); ?></h5>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>

<!-- Data Privacy: Protecting Sensitive Data  -->
<section  class="data-privacy-sect bg-f4 py-5 clearfix">
    <?php if (have_rows('data_privacy')) : while (have_rows('data_privacy')) : the_row(); ?>
        <div class="container py-md-4">
            <div class="welcome-block  col-md-11 mx-auto  wow fadeInUp" data-wow-delay=".1s">
                <div class="section-title text-center   pb-md-4">
                    <div class="line mb-4"></div>
                    <h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
                    <?php echo get_sub_field('description'); ?>
                </div>
            </div>
            <div class="row g-3 gx-md-4 gy-md-5 wow fadeInUp" data-wow-delay=".1s">
                <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                    <div class="col-md-4">
                        <div class="exp-block">
                            <i class="fas fa-check-circle text-green"></i>
                            <h5 class="bold mb-0"><?php echo get_sub_field('title'); ?></h5>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>

<!-- Transfer Impact Assessment guide  -->
<section  class="exp-area py-5 clearfix">
	<div class="container">
		<div class="row g-4 justify-content-center align-items-center">
			<div class="col-md-7 wow fadeInLeft" data-wow-delay=".1s">
				<div class="section-title text-white">
					<h3 class="text-white"><?php echo get_field("transfer_impact")["title"]; ?></h3>
					<p class="mb-0"><?php echo get_field("transfer_impact")["description"]; ?></p>
				</div>
			</div>
			<div class="col-md-3 wow fadeInRight" data-wow-delay=".1s">
				<div class="text-center">
					<a href="<?php echo get_field("transfer_impact")["button_link"]; ?>" class="btn btn1 border-white"><?php echo get_field("transfer_impact")["button_text"]; ?></a>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Seven Bridges’ GDPR Sub-processors  -->
<section  class="table-area text-center py-5 clearfix">
    <?php if (have_rows('sub_processors')) : while (have_rows('sub_processors')) : the_row(); ?>
        <div class="container py-md-4">
            <div class="welcome-block  col-md-11 mx-auto  wow fadeInUp" data-wow-delay=".1s">
                <div class="section-title   pb-md-4">
                    <div class="line mb-4"></div>
                    <h2 class="mb-4"><?php echo get_sub_field('title'); ?></h2>
                    <?php echo get_sub_field('description'); ?>
                </div>
            </div>

            <div class=" wow fadeInUp" data-wow-delay=".3s">
                <div class="table-responsive">
                    <?php if (have_rows('table')) : while (have_rows('table')) : the_row(); ?>
                        <table class="table table-style fix-layout welcome-p">
                            <thead>
                                <?php if (have_rows('table_header')) : while (have_rows('table_header')) : the_row(); ?>
                                    <th><?php echo get_sub_field('header_data'); ?></th>
                                <?php endwhile; endif; ?>
                            </thead>
                            <tbody>
                                <?php if (have_rows('table_row')) : while (have_rows('table_row')) : the_row(); ?>
                                    <tr>
                                        <td><?php echo get_sub_field('sub-processor'); ?></td>
                                        <td><?php echo get_sub_field('usage'); ?></td>
                                        <td><?php echo get_sub_field('personal_data_type'); ?></td>
                                        <td><?php echo get_sub_field('entity_location'); ?></td>
                                        <td><a href="<?php echo get_sub_field('website'); ?>" class="primary-light underline"><?php echo get_sub_field('website_text'); ?></a></td>
                                    </tr>
                                <?php endwhile; endif; ?>
                            </tbody>
                        </table>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>

<!-- CTA -->
<?php get_template_part("template-parts/cta-section"); ?>
<?php get_footer(); ?>