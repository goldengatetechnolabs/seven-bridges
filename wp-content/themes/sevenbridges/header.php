<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title><?php the_title(); ?></title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/> 
	<meta name="robots" content=""/>
	<!-- Favicon -->
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- Stylesheet -->
	<?php wp_head(); ?>
	<script type="text/javascript">
		document.addEventListener( 'wpcf7mailsent', function( event ) {
			if (event.detail.contactFormId == "5") {
				location = '<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/11/GRAF-Brochure.pdf';
			}
			if (event.detail.contactFormId == "1319") {
				location = '<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/11/GRAF-Brochure.pdf';
			}
			if (event.detail.contactFormId == "1326") {
				location = '<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/11/GRAF-Brochure.pdf';
			}
			if (event.detail.contactFormId == "1333") {
				location = '<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/11/GRAF-Brochure.pdf';
			}
		}, false );
	</script>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="header-top bg-primary-color">
	<div class="container">
		<div class="justify-content-lg-end">
			<ul class="navbar-nav align-items-center justify-content-end flex-row">
				<?php if ( is_active_sidebar( 'header-menu' ) ) { dynamic_sidebar( 'header-menu' ); } ?>
			</ul>
		</div>
	</div>
</div>

<header class="navigation">
    <div class="container">
        <nav class="navbar navbar-expand-lg justify-content-between align-items-center p-lg-0 py-2">
        	<a class="navbar-brand p-0 m-0" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<picture class="logo">
					<img loading="lazy" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" height="35" />
				</picture>
			</a>

			<!-- Mobile Menu Toggler -->
			<div class="mobile-toggle navbar-toggler ms-4" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"  aria-controls="navbarNavDropdown" aria-expanded="false">
				<div class="one"></div>
				<div class="three"></div>
			</div>

			<div class="main-menu navbar-collapse collapse  align-items-center justify-content-lg-end" id="navbarNavDropdown">
			<?php
				// wp_nav_menu(array(
				// 	'theme_location' => 'mega_menu',
				// 	'depth' => 2,
				// 	'container' => "",
				// 	"container_class" => "",
				// 	'menu_class'  => 'navbar-nav align-items-center',
				// 	'walker'  => new WP_Bootstrap_Mega_Navwalker()
				// ));
			?>
				<ul class="navbar-nav align-items-center">
					<li class="nav-item dropdown mega-drop"> 
						<a href="#" class="nav-link dropdown-toggle" role="button" id="d1" data-bs-toggle="dropdown" aria-expanded="false">Platform</a> 
						<div class="dropdown-menu mega-menu" aria-labelledby="d1">
							<div class="row">
								<div class="col-md-3">
		                			<ul class="list-unstyled">
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">Seven Bridges Platform</div>
		                						<div class="small">Start with the foundation</div>
		                					</a>
		                				</li>
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">ARIA</div>
		                						<div class="small">Support large-scale genomics</div>
		                					</a>
		                				</li>
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">GRAF</div>
		                						<div class="small">Analyze genome graphs</div>
		                					</a>
		                				</li>
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">RHEO</div>
		                						<div class="small">Scale with automation</div>
		                					</a>
		                				</li>
		                			</ul>
		                		</div>

		                		<div class="col-md-3">
		                			<ul class="list-unstyled">
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">Consulting Services</div>
		                						<div class="small">Advance your research</div>
		                					</a>
		                				</li>
		                			</ul>
		                		</div>

		                		<div class="col-md-3">
									<ul class="list-unstyled">
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">Enterprise-Grade Support</div>
		                						<div class="small">Support growth and compliance</div>
		                					</a>
		                				</li>
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">Infrastructure</div>
		                						<div class="small">Work in a cloud-based foundation</div>
		                					</a>
		                				</li>
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">Security & Compliance</div>
		                						<div class="small">Meet regulatory requirements</div>
		                					</a>
		                				</li>
		                			</ul>
		                		</div>

		                		<div class="col-md-3">
									<ul class="list-unstyled">
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">Apps & Tools</div>
		                						<div class="small">Extend datasets and capabilities</div>
		                					</a>
		                				</li>
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">Knowledge Center</div>
		                					</a>
		                				</li>
		                			</ul>
		                		</div>
		                	</div>
	                    </div>
					</li>

					<li class="nav-item dropdown mega-drop"> 
						<a href="javascript:void(0);" class="nav-link dropdown-toggle" role="button" id="d2" data-bs-toggle="dropdown" aria-expanded="false">Solutions</a> 
						<div class="dropdown-menu mega-menu two-column dropdown-menu-end" aria-labelledby="d2">
							<div class="row">
								<div class="col-md-6">
									<ul class="list-unstyled">
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">Seven Bridges Platform</div>
		                						<div class="small">Start with the foundation</div>
		                					</a>
		                				</li>
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">ARIA</div>
		                						<div class="small">Support large-scale genomics</div>
		                					</a>
		                				</li>
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">GRAF</div>
		                						<div class="small">Analyze genome graphs</div>
		                					</a>
		                				</li>
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">RHEO</div>
		                						<div class="small">Scale with automation</div>
		                					</a>
		                				</li>
		                			</ul>
		                		</div>

		                		<div class="col-md-6">
									<ul class="list-unstyled">
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">Seven Bridges Platform</div>
		                						<div class="small">Start with the foundation</div>
		                					</a>
		                				</li>
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">ARIA</div>
		                						<div class="small">Support large-scale genomics</div>
		                					</a>
		                				</li>
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">GRAF</div>
		                						<div class="small">Analyze genome graphs</div>
		                					</a>
		                				</li>
		                				<li>
		                					<a href="">
		                						<div class="megamenu-ttl bold">RHEO</div>
		                						<div class="small">Scale with automation</div>
		                					</a>
		                				</li>
		                			</ul>
		                		</div>
		                	</div>
	                    </div>
					</li>

					<li class="nav-item dropdown"> 
						<a href="javascript:void(0);" class="nav-link dropdown-toggle" role="button" id="d3" data-bs-toggle="dropdown" aria-expanded="false">Why Seven Bridges?</a> 
						<div class="dropdown-menu" aria-labelledby="d3">
                			<ul class="list-unstyled m-0">
                				<li>
                					<a href="">
                						<div class="megamenu-ttl bold">Latest Insights</div>
                						<div class="small">Explore the latest inspiration and publications from Seven Bridges</div>
                					</a>
                				</li>
                				<li><a href="">Case Studies</a></li>
                				<li><a href="">Publications </a></li>
                				<li><a href="">White Papers</a></li>
                				<li><a href="">Webinars & Events </a></li>
                				<li><a href="">Blog</a></li>
                			</ul>
	                    </div>
					</li>

					<li class="nav-item"><a href="" class="nav-link">Insights</a> </li>

					<li class="nav-item dropdown"> 
						<a href="shop.php" class="nav-link dropdown-toggle" role="button" id="d4" data-bs-toggle="dropdown" aria-expanded="false">Company</a> 
						<div class="dropdown-menu" aria-labelledby="d4">
                			<ul class="list-unstyled m-0">
                				<li><a href="">About Us</a></li>
								<li><a href="">Vision</a></li>
								<li><a href="">Leadership</a></li>
								<li><a href="">Press</a></li>
                			</ul>
	                    </div>
					</li>

					<li class="nav-item dropdown"> 
						<a href="shop.php" class="nav-link dropdown-toggle" role="button" id="d5" data-bs-toggle="dropdown" aria-expanded="false">Career</a> 
						<div class="dropdown-menu" aria-labelledby="d5">
                			<ul class="list-unstyled m-0">
                				<li><a href="">About Us</a></li>
								<li><a href="">Vision</a></li>
								<li><a href="">Leadership</a></li>
								<li><a href="">Press</a></li>
                			</ul>
	                    </div>
					</li>
				</ul>
				<ul class="navbar-nav align-items-center">
					<?php if ( is_active_sidebar( 'header-button' ) ) { dynamic_sidebar( 'header-button' ); } ?>
				</ul>
			</div>
		</nav>
    </div>
</header>