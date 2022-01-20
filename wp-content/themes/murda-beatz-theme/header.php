<!DOCTYPE html>
<html lang="en">
<head>
	<?php if ( is_home() ) {?>
		<title><?php bloginfo('name') ?></title>
	<?php } else { ?>	
		<title><?php wp_title('|',true,'right'); ?> <?php bloginfo('name') ?> </title>
	<?php }	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<meta name=”title” content=”<?php wp_title('|',true,'right'); ?>  <?php bloginfo('name') ?> ” />
	<meta name="description" content= "Progrentis ejemplo"
	<meta name="robots" content="Index,Follow">
	<meta name="Author" content="">
	<meta name="Generator" content="Wordpress">
	<meta name="Lenguage" content="Es">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Sedgwick+Ave&display=swap" rel="stylesheet">
	<?php wp_head() ?>
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css">
	<![endif]-->

	<!-- [if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
	<header class="header padding-top-md">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<div class="mobile-center">
						<a href="<?php echo HOMELINK ?>">
                            <?php
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                if ( has_custom_logo() ) {
                                        echo '<img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '" class="img-fluid">';
                                } else {
                                        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                                }
                            ?>
                        </a>
					</div>
				</div>
				<div class="col-lg-9 col-md-12">
                        <!--Main Menú -->

                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            	 <div class="container-fluid">
                            	 	<div class="mobile-center">
									    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									      <span class="navbar-toggler-icon"></span>
									    </button>
									</div>
								 <div class="collapse navbar-collapse" id="navbarSupportedContent">
									<?php
	                                wp_nav_menu(array(
	                                    'theme_location' => 'primary_menu',
	                                    'container' => false,
	                                    'menu_class' => '',
	                                    'fallback_cb' => '__return_false',
	                                    'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
	                                    'depth' => 2,
	                                    'walker' => new bootstrap_5_wp_nav_menu_walker()
	                                ));
	                                ?>
                                </div>
                            </div>
                        </nav>
				</div>
			</div>
		</div>		
	</header>

