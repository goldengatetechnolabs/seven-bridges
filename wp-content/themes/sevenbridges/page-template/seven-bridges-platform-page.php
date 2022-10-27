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

		<div class="row g-4 justify-content-center align-items-center clearfix mb-5">
			<div class="col-md-6 wow fadeInLeft" data-wow-delay=".1s">
				<div class="section-title">
					<h4 class="mb-3">1) Connect teams and data</h4>
				</div>
                
				<p class="welcome-p">The Platform is made for research groups of all sizes, whether local or distributed, to enable a unified vision of data’s impact. Since all the tools, data, and compute power live in the cloud or your organization’s data center, you can work with your team, whatever your size or wherever you are.</p>

				<a href="" class="link">Learn More <i class="fas fa-long-arrow-right ms-2"></i></a>
			</div>

			<div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
				<div class="how-img img-style small-style both-blue"><img src="images/how.jpg" class="img-fluid br-0"></div>
			</div>
		</div>

		<div class="row flex-md-row-reverse g-4 justify-content-center align-items-center clearfix mb-5">
			<div class="col-md-6 wow fadeInLeft" data-wow-delay=".1s">
				<div class="section-title">
					<h4 class="mb-3">2) Iterate in silico analyses</h4>
				</div>
				<p class="welcome-p">Easily test hypotheses against vast amounts of public and private data. In silico modeling reveals insights that challenge expectations, and computing power lets you work at the speed of your imagination.</p>

				<a href="" class="link">Learn More <i class="fas fa-long-arrow-right ms-2"></i></a>
			</div>

			<div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
				<div class="how-img img-style small-style both-blue"><img src="images/how.jpg" class="img-fluid br-0"></div>
			</div>
		</div>

		<div class="row g-4 justify-content-center align-items-center clearfix mb-5">
			<div class="col-md-6 wow fadeInLeft" data-wow-delay=".1s">
				<div class="section-title">
					<h4 class="mb-3">3) Accelerate discovery</h4>
				</div>
				<p class="welcome-p">Organize, explore, and empower omics data with out-of-the-box and tailored workflows and algorithms. Streamline research, therapeutic discovery and development, and diagnostic assay development.</p>

				<a href="" class="link">Learn More <i class="fas fa-long-arrow-right ms-2"></i></a>
			</div>

			<div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
				<div class="how-img img-style small-style both-blue"><img src="images/how.jpg" class="img-fluid br-0"></div>
			</div>
		</div>

		<div class="row flex-md-row-reverse g-4 justify-content-center align-items-center clearfix mb-5">
			<div class="col-md-6 wow fadeInLeft" data-wow-delay=".1s">
				<div class="section-title">
					<h4 class="mb-3">4) Visualize the new world of discovery</h4>
				</div>
				<p class="welcome-p">Don’t just analyze—visualize. The Platform features a suite of fully customizable visualization tools. It also includes the Seven Bridges interactive genome browser built for collaborative investigations.</p>

				<a href="" class="link">Learn More <i class="fas fa-long-arrow-right ms-2"></i></a>
			</div>

			<div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
				<div class="how-img img-style small-style both-blue"><img src="images/how.jpg" class="img-fluid br-0"></div>
			</div>
		</div>

		<div class="row g-4 justify-content-center align-items-center clearfix">
			<div class="col-md-6 wow fadeInLeft" data-wow-delay=".1s">
				<div class="section-title">
					<h4 class="mb-3">5) Gain insights</h4>
				</div>
				<p class="welcome-p">With the Seven Bridges Platform, data becomes more than simply a tool for research and development, but rather data forms the fabric that weaves remarkable new discoveries.</p>

				<a href="" class="link">Learn More <i class="fas fa-long-arrow-right ms-2"></i></a>
			</div>

			<div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
				<div class="how-img img-style small-style both-blue"><img src="images/how.jpg" class="img-fluid br-0"></div>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>
</section>

<!-- Draw on our expertise to accelerate discovery  -->
<section  class="exp-area py-5 clearfix">
	<div class="container">
		<div class="row g-4 justify-content-center align-items-center">
			<div class="col-md-7 wow fadeInLeft" data-wow-delay=".1s">
				<div class="section-title text-white">
					<h3 class="text-white">Draw on our expertise to accelerate discovery</h3>
					<p class="mb-0">We offer on-demand professional scientific and bioinformatic services from a team of over 150+ experts.</p>
				</div>
			</div>
			<div class="col-md-3 wow fadeInRight" data-wow-delay=".1s">
				<div class="text-center">
					<a href="" class="btn btn1 border-white">Learn More</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section  class="logo-area py-5 text-center clearfix  wow fadeInUp" data-wow-delay=".1s">
	<div class="container">
		<div class="section-title mb-4">
			<h4 class="medium">The Seven Bridges Platform leverages many of the largest public datasets, including NIH datasets.</h4>
		</div>
		<div class="logo-block">
			<div class="l01"><img src="images/clients/05.png" class="img-fluid"></div>
			<div class="l01"><img src="images/clients/06.png" class="img-fluid"></div>
			<div class="l01"><img src="images/clients/07.png" class="img-fluid"></div>
			<div class="l01"><img src="images/clients/08.png" class="img-fluid"></div>
			<div class="l01"><img src="images/clients/09.png" class="img-fluid"></div>
			<div class="l01"><img src="images/clients/10.png" class="img-fluid"></div>
		</div>
	</div>
</section>

<!-- Accuracy -->
<section class="accuracy-area py-5 clearfix">
	<div class="container py-md-4">
		<div class="section-title pb-4 col-md-10 mx-auto  text-center wow fadeInUp" data-wow-delay=".1s">
			<div class="line"></div>
			<h2 class="mb-3">Accuracy > Speed</h2>
			<p class="welcome-p text-center">State-of-the-art bioinformatic tools and best-practice pipelines ensure your results are error-free. While the Platform uses cloud-optimized bioinformatics tools to enable speedy analysis, when tradeoffs between accuracy and speed are required, we always ensure the former.</p>
		</div>

		<div class="row g-4 icon-sect">
			<div class="col-md-6 wow fadeInUp" data-wow-delay=".1s">
				<div class="discovery-block p-xxl-5">
					<div class="section-title">
						<h4 class="primary-color">Security & Compliance</h4>
					</div>
					<p class="welcome-p">Integrated security features meet or surpass regulatory requirements.</p>
					<a href="" class="link">Learn More <i class="fas fa-long-arrow-right ms-2"></i></a>
				</div>
			</div>
			<div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
				<div class="discovery-block p-xxl-5">
					<div class="section-title">
						<h4 class="primary-color">Scalable Infrastructure</h4>
					</div>
					<p class="welcome-p">Our cloud-agnostic approach provides compute and storage resources that dynamically scale.</p>
					<a href="" class="link">Learn More <i class="fas fa-long-arrow-right ms-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Extended capabilities  -->
<section  class="capabilities-area mb-5 clearfix">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-md-6 pe-md-5 wow fadeInLeft" data-wow-delay=".1s">
				<div class="section-title">
					<h4 class="mb-3">Extended capabilities</h4>
				</div>
				<p class="welcome-p col-xxl-10">Accelerate and optimize your discoveries further with add-on products.</p>

				<div class="v-tabs-block mt-4 mb-5">
					<div class="nav flex-column nav-pills" id="v-ARIA-tab" role="tablist" aria-orientation="vertical">
					    <button class="nav-link active" id="v-pills-ARIA-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ARIA" type="button" role="tab" aria-controls="v-pills-ARIA" aria-selected="true">
					    	<div class="section-title">
					    		<h3 class="mb-0">ARIA</h3>
					    	</div>
				    		<p class="mb-0">Access genomic and phenotypic data in one place</p>
					    </button>
					    <button class="nav-link" id="v-pills-GRAF-tab" data-bs-toggle="pill" data-bs-target="#v-pills-GRAF" type="button" role="tab" aria-controls="v-pills-GRAF" aria-selected="false">
					    	<div class="section-title">
					    		<h3 class="mb-0">GRAF</h3>
					    	</div>
				    		<p class="mb-0">Shape a better reference from linear to graph</p>
					    </button>
					    <button class="nav-link" id="v-pills-RHEO-tab" data-bs-toggle="pill" data-bs-target="#v-pills-RHEO" type="button" role="tab" aria-controls="v-pills-RHEO" aria-selected="false">
					    	<div class="section-title">
					    		<h3 class="mb-0">RHEO</h3>
					    	</div>
				    		<p class="mb-0">Automate to draw insights quicker</p>
					    </button>
				  	</div>
			  	</div>

			  	<div class="v-tabs-block mt-4 px-4">
			  		<p class="welcome-p">Get started with tutorials and find tips on API and applications.</p>
			  		<a href="" class="btn btn1">Knowledge Center</a>
			  	</div>
			</div>

			<div class="col-md-6 wow fadeInRight" data-wow-delay=".1s">
				<div class="v-tab-content">
					<div class="tab-content" id="v-pills-tabContent">
					    <div class="tab-pane fade show active" id="v-pills-ARIA" role="tabpanel" aria-labelledby="v-pills-ARIA-tab">
					    	<div class="v-img"><img src="images/graphic.png" class="img-fluid"></div>
					    </div>
					    <div class="tab-pane fade" id="v-pills-GRAF" role="tabpanel" aria-labelledby="v-pills-GRAF-tab">...</div>
					    <div class="tab-pane fade" id="v-pills-RHEO" role="tabpanel" aria-labelledby="v-pills-RHEO-tab">...</div>
				  	</div>
			  	</div>
			</div>
		</div>
	</div>
</section>


<!-- CTA -->
<section class="cta-sect bg-secondary-color text-center text-md-start text-white clearfix pt-3">
	<div class="container">
		<div class="row justify-content-center justify-content-center g-4">
			<div class="col-md-11">
				<div class="row align-items-center justify-content-center">
					<div class="col-md-5 wow fadeInLeft" data-wow-delay=".3s">
						<div class="cta-img"><img src="images/cta.png" class="img-fluid w-100"></div>
					</div>
					<div class="col-md-7 py-5 py-md-0 ps-md-5  wow fadeInRight" data-wow-delay=".3s">
						<div class="section-title">
							<h2 class="mb-3 text-white">See how Seven Bridges drives R&D from insight to impact.</h2>
						</div>

						<a href="" class="btn">Request a Demo</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>