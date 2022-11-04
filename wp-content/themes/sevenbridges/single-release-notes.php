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
<?php $terms = get_the_terms( get_the_ID(), 'release-note' ); ?> 
<section  class="nn-sect py-5 clearfix">
	<div class="container py-md-4">
        <div class="row g-4">
            <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                <p class="primary-light medium mb-2 fs-14"><?php echo get_the_date('M j, Y', '', '', FALSE); ?> | 
                <?php 
                        if (! empty($terms)) {
                        foreach ($terms as $term) {
                    ?>
                            <span  class="tags mb-2"><?php echo $term->name; ?></span> 
                    <?php  } } ?>
                </p>
				<p  class="mb-4">Written by <span class="text-primary"><b><?php echo get_the_author_meta('display_name', $author_id); ?></b> </span>in on <?php echo get_the_date('F jS, Y', '', '', FALSE); ?></p>
				<h4 class="mb-4"><b><?php echo the_title(); ?></b></h4>
                <?php echo the_content(); ?>
            </div><hr>
			<div class="row mt-4 mb-4">
				<div class="col-lg-6 col-md-6">
					<a href="<?php echo get_post_type_archive_link( 'release-notes' ); ?>" class="text-danger"><i class="fa-solid fa-arrow-rotate-right p-2"></i>Back to Release Notes</a>
				</div>
				<div class="col-lg-3 col-md-3">
                <?php $prev_post = get_adjacent_post(false, '', true); ?>
                <?php if    (!empty($prev_post)) { ?>
					<a href="<?php echo get_permalink($prev_post->ID) ?>" class="text-danger" ><i class="fa-solid fa-arrow-left p-2" ></i>Previous Post</a>
                <?php } ?>
				</div> 
				<div class="col-lg-3 col-md-3">
                <?php $next_post = get_adjacent_post(false, '', false); ?>
                <?php	if(!empty($next_post)) { ?>
					<a href="<?php echo get_permalink($next_post->ID) ?>" class="text-danger" >Next Post<i class="fa-solid fa-arrow-right p-2" ></i></a>
                <?php } ?>
				</div>
        	</div> 
        </div>
    </div>
</section>

<?php get_footer(); ?>
