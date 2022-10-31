<?php
/**
* Template Name:Company
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
				<p class=""><?php echo get_field("banner")["description"]; ?></p>
			</div>
		</div>
	</div>
</section>

<section  class="blogs-sect py-5 clearfix">
	<div class="container py-md-4">
		<div class="section-title text-center wow fadeInUp" data-wow-delay=".1s">
			<div class="line mb-4"></div>
			<h2 class="mb-0"><?php echo get_field("ten_year")["title"]; ?></h2>
			<p class="col-md-10 mx-auto py-4"><?php echo get_field("ten_year")["description"]; ?></p>

			<a href="<?php echo get_field("ten_year")["button_link"]; ?>" class="btn btn1"><?php echo get_field("ten_year")["button_text"]; ?></a>
		</div>
	</div>
</section>

<section class="highlight-area pb-5 clearfix">
<?php if (have_rows('highlights')) : while (have_rows('highlights')) : the_row(); ?>
	<div class="container pb-md-4">
		<div class="section-title pb-4 text-center wow fadeInUp" data-wow-delay=".1s">
			<h3 class="mb-0"><?php echo get_sub_field('title'); ?></h3>
		</div>
		<div class="row gx-4 gy-0 wow fadeInUp animated" data-wow-delay=".1s">
            <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                <div class="col-md-3">
                    <div class="testimonials-block highlight-block">
                        <div class="testimonials-img">
                            <img src="<?php echo get_sub_field('image'); ?>" class="img-fluid">
                            <img src="<?php echo get_sub_field('icon'); ?>" class="highlight-icon">
                        </div>
                        <div class="testimonials-details">
                            <div class="section-title"><h2><?php echo get_sub_field('number'); ?></h2></div>
                            <p><?php echo get_sub_field('short_description'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
		</div>
	</div>
<?php endwhile; endif; ?>

</section>

<!-- Industry recognition -->
<section class="ind-area bg-f4 py-5 clearfix">
    <?php if (have_rows('industry_recognition')) : while (have_rows('industry_recognition')) : the_row(); ?>
        <div class="container py-md-4">
            <div class="section-title pb-5 text-center wow fadeInUp" data-wow-delay=".1s">
                <h3 class="mb-0"><?php echo get_sub_field('title'); ?></h3>
            </div>
            <div class="row g-4 align-items-center wow fadeInUp animated" data-wow-delay=".3s">
            <?php if (have_rows('content')) : while (have_rows('content')) : the_row(); ?>
                <div class="col-md-2">
                    <div class="company-img"><img src="<?php echo get_sub_field('icon'); ?>"></div>
                </div>
            <?php endwhile; endif; ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>

<!-- Map -->
<section class="map-area py-5 clearfix">
    <?php if (have_rows('our_offices')) : while (have_rows('our_offices')) : the_row(); ?>
        <div class="container pt-md-4">
            <div class="section-title pb-5 text-center wow fadeInUp" data-wow-delay=".1s">
                <h3 class="mb-0"><?php echo get_sub_field('title'); ?></h3>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="map-img mb-5 text-center  wow fadeInUp" data-wow-delay=".3s">
                        <img src="<?php echo get_sub_field('image'); ?>" class="img-fluid w-100">
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#f01" aria-expanded="true" aria-controls="f01" class="dot boston">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" viewBox="0 0 20 25">
                            <path xmlns="http://www.w3.org/2000/svg" id="Path_10015" data-name="Path 10015" d="M-15192,21865.672l6.722-6.635,2.182-5.963v-4.395l-4.39-4.844H-15195l-5.011,3.125-1.27,6.113,2.727,5.963,4.7,4.775Z" transform="translate(15202 -21842)" fill="#fff" style="fill: #fff;"/><path id="Path_10010" data-name="Path 10010" d="M18,16.188a2.188,2.188,0,0,0,1.547-3.734,2.188,2.188,0,0,0-3.094,3.094A2.108,2.108,0,0,0,18,16.188Zm0,10.344a36.617,36.617,0,0,0,6.141-6.86,10.4,10.4,0,0,0,1.984-5.422,8.134,8.134,0,0,0-2.359-6.031A7.871,7.871,0,0,0,18,5.875a7.871,7.871,0,0,0-5.766,2.344A8.134,8.134,0,0,0,9.875,14.25a10.253,10.253,0,0,0,2.031,5.422A39.763,39.763,0,0,0,18,26.532ZM18,29a41.549,41.549,0,0,1-7.516-7.953A12.369,12.369,0,0,1,8,14.25a9.667,9.667,0,0,1,3.016-7.469,10.161,10.161,0,0,1,13.969,0A9.667,9.667,0,0,1,28,14.25a12.369,12.369,0,0,1-2.484,6.8A41.549,41.549,0,0,1,18,29Z" transform="translate(-8 -4)" fill="#8a8e92"/>
                            </svg>
                        </button>
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#f02" aria-expanded="true" aria-controls="f02" class="dot london collapsed">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" viewBox="0 0 20 25">
                            <path xmlns="http://www.w3.org/2000/svg" id="Path_10015" data-name="Path 10015" d="M-15192,21865.672l6.722-6.635,2.182-5.963v-4.395l-4.39-4.844H-15195l-5.011,3.125-1.27,6.113,2.727,5.963,4.7,4.775Z" transform="translate(15202 -21842)" fill="#fff" style="fill: #fff;"/><path id="Path_10010" data-name="Path 10010" d="M18,16.188a2.188,2.188,0,0,0,1.547-3.734,2.188,2.188,0,0,0-3.094,3.094A2.108,2.108,0,0,0,18,16.188Zm0,10.344a36.617,36.617,0,0,0,6.141-6.86,10.4,10.4,0,0,0,1.984-5.422,8.134,8.134,0,0,0-2.359-6.031A7.871,7.871,0,0,0,18,5.875a7.871,7.871,0,0,0-5.766,2.344A8.134,8.134,0,0,0,9.875,14.25a10.253,10.253,0,0,0,2.031,5.422A39.763,39.763,0,0,0,18,26.532ZM18,29a41.549,41.549,0,0,1-7.516-7.953A12.369,12.369,0,0,1,8,14.25a9.667,9.667,0,0,1,3.016-7.469,10.161,10.161,0,0,1,13.969,0A9.667,9.667,0,0,1,28,14.25a12.369,12.369,0,0,1-2.484,6.8A41.549,41.549,0,0,1,18,29Z" transform="translate(-8 -4)" fill="#8a8e92"/>
                            </svg>
                        </button>
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#f03" aria-expanded="false" aria-controls="f03" class="dot belgrade collapsed">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" viewBox="0 0 20 25">
                            <path xmlns="http://www.w3.org/2000/svg" id="Path_10015" data-name="Path 10015" d="M-15192,21865.672l6.722-6.635,2.182-5.963v-4.395l-4.39-4.844H-15195l-5.011,3.125-1.27,6.113,2.727,5.963,4.7,4.775Z" transform="translate(15202 -21842)" fill="#fff" style="fill: #fff;"/><path id="Path_10010" data-name="Path 10010" d="M18,16.188a2.188,2.188,0,0,0,1.547-3.734,2.188,2.188,0,0,0-3.094,3.094A2.108,2.108,0,0,0,18,16.188Zm0,10.344a36.617,36.617,0,0,0,6.141-6.86,10.4,10.4,0,0,0,1.984-5.422,8.134,8.134,0,0,0-2.359-6.031A7.871,7.871,0,0,0,18,5.875a7.871,7.871,0,0,0-5.766,2.344A8.134,8.134,0,0,0,9.875,14.25a10.253,10.253,0,0,0,2.031,5.422A39.763,39.763,0,0,0,18,26.532ZM18,29a41.549,41.549,0,0,1-7.516-7.953A12.369,12.369,0,0,1,8,14.25a9.667,9.667,0,0,1,3.016-7.469,10.161,10.161,0,0,1,13.969,0A9.667,9.667,0,0,1,28,14.25a12.369,12.369,0,0,1-2.484,6.8A41.549,41.549,0,0,1,18,29Z" transform="translate(-8 -4)" fill="#8a8e92"/>
                            </svg>
                        </button>
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#f04" aria-expanded="false" aria-controls="f04" class="dot novi collapsed">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" viewBox="0 0 20 25">
                            <path xmlns="http://www.w3.org/2000/svg" id="Path_10015" data-name="Path 10015" d="M-15192,21865.672l6.722-6.635,2.182-5.963v-4.395l-4.39-4.844H-15195l-5.011,3.125-1.27,6.113,2.727,5.963,4.7,4.775Z" transform="translate(15202 -21842)" fill="#fff" style="fill: #fff;"/><path id="Path_10010" data-name="Path 10010" d="M18,16.188a2.188,2.188,0,0,0,1.547-3.734,2.188,2.188,0,0,0-3.094,3.094A2.108,2.108,0,0,0,18,16.188Zm0,10.344a36.617,36.617,0,0,0,6.141-6.86,10.4,10.4,0,0,0,1.984-5.422,8.134,8.134,0,0,0-2.359-6.031A7.871,7.871,0,0,0,18,5.875a7.871,7.871,0,0,0-5.766,2.344A8.134,8.134,0,0,0,9.875,14.25a10.253,10.253,0,0,0,2.031,5.422A39.763,39.763,0,0,0,18,26.532ZM18,29a41.549,41.549,0,0,1-7.516-7.953A12.369,12.369,0,0,1,8,14.25a9.667,9.667,0,0,1,3.016-7.469,10.161,10.161,0,0,1,13.969,0A9.667,9.667,0,0,1,28,14.25a12.369,12.369,0,0,1-2.484,6.8A41.549,41.549,0,0,1,18,29Z" transform="translate(-8 -4)" fill="#8a8e92"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div id="accordion" class="row g-4 wow fadeInUp" data-wow-delay=".5s">
                <?php $i=0; ?>
                <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                <?php $i++; ?>
                <div class="col-md-3">
                    <button type="button" data-bs-toggle="collapse" data-bs-target="#f0<?php echo $i; ?>" aria-expanded="true" aria-controls="f0<?php echo $i; ?>" class="address-block welcome-p <?php if($i==1){echo "active";} ?>">
                        <h5 class="medium mb-3"><i class="far fa-map-marker-alt me-2"></i><?php echo get_sub_field('country_name'); ?></h5>
                        <p><?php echo get_sub_field('address'); ?></p>
                    </button>
                    <div id="f0<?php echo $i; ?>" class="accordion-collapse" data-bs-parent="#accordion"></div>
                </div>
                <?php endwhile; endif; ?>

                <!-- <div class="col-md-3">
                    <button type="button" data-bs-toggle="collapse" data-bs-target="#f02" aria-expanded="true" aria-controls="f02" class="address-block welcome-p collapsed">
                        <h5 class="medium mb-3"><i class="far fa-map-marker-alt me-2"></i>London</h5>
                        <p>25 Wilton Road, Victoria,<br/> London,<br/> SW1V 1LW <br/>United Kingdom</p>
                    </button>
                    <div id="f02" class="accordion-collapse" data-bs-parent="#accordion"></div>
                </div>
                <div class="col-md-3">
                    <button type="button" data-bs-toggle="collapse" data-bs-target="#f03" aria-expanded="true" aria-controls="f03"class="address-block welcome-p collapsed">
                        <h5 class="medium mb-3"><i class="far fa-map-marker-alt me-2"></i>Belgrade</h5>
                        <p>Omladinskih brigada 90g,<br/> Airport City, Dahlia building<br/> 11070 Belgrade <br/>Republic of Serbia</p>
                    </button>
                    <div id="f03" class="accordion-collapse" data-bs-parent="#accordion"></div>
                </div>
                <div class="col-md-3">
                    <button type="button" data-bs-toggle="collapse" data-bs-target="#f04" aria-expanded="true" aria-controls="f04" class="address-block welcome-p collapsed">
                        <h5 class="medium mb-3"><i class="far fa-map-marker-alt me-2"></i>Novi Sad</h5>
                        <p>Milana Savica 25,<br/> 21000 Novi Sad <br/> Republic of Serbia</p>
                    </button>
                    <div id="f04" class="accordion-collapse" data-bs-parent="#accordion"></div>
                </div> -->
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>

<!-- Map -->
<section class="lead-area py-5 clearfix">
    <?php if (have_rows('our_leadership')) : while (have_rows('our_leadership')) : the_row(); ?>
        <div class="container pb-md-4">
            <div class="section-title pb-5 text-center wow fadeInUp" data-wow-delay=".1s">
                <h3 class="mb-0"><?php echo get_sub_field('title'); ?></h3>
            </div>

            <div class="row g-4">
                <?php $i = 0; ?>
                <?php if (have_rows('card')) : while (have_rows('card')) : the_row(); ?>
                <?php $i++; ?>
                    <div class="col-md-6 wow <?php echo ($i == 1) ? "fadeInLeft" : 'fadeInRight'; ?> " data-wow-delay=".1s">
                        <div class="how-img img-style small-style both-red">
                            <img src="<?php echo get_sub_field('image'); ?>" class="img-fluid w-100">
                        </div>
                        <a href="<?php echo get_sub_field('link'); ?>" class="link p-3 d-inline-block"><?php echo get_sub_field('link_text'); ?> <i class="fas fa-long-arrow-right ms-2"></i></a>
                    </div>
                <?php endwhile; endif; ?>

                <!-- <div class="col-md-6 wow " data-wow-delay=".1s">
                    <div class="how-img img-style small-style both-red">
                        <img src="images/career.png" class="img-fluid w-100">
                    </div>
                    <a href="" class="link p-3 d-inline-block">Explore careers <i class="fas fa-long-arrow-right ms-2"></i></a>
                </div> -->
            </div>
        </div>
    <?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>