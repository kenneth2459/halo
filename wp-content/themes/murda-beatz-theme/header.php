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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head() ?>
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css">
	<![endif]-->

	<!-- [if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
	<header class="header">
		
	</header>

