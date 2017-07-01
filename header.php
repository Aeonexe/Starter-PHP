<?php include( 'functions.php' ); ?>

	<!DOCTYPE html>
	<html lang="es_ES" dir="ltr" class="page">
		<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
				<meta charset="UTF-8">
			<!--Display-->
				<meta name="HandheldFriendly" content="True">
				<meta name="MobileOptimized" content="416">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="IE-Edge">
				<meta name="apple-mobile-web-app-capable" content="yes">
				<meta name="apple-touch-fullscreen" content="yes">
				<meta name="apple-mobile-web-app-status-bar-style" content="black">
				<meta name="format-detection" content="telephone=no">
			<!--Browser-->
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
				<!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />-->
				<!--<meta http-equiv="x-UA-compatible" content="IE=EmulateIE8">	-->
			<!--info-->
				<title><?php echo $headers['title']; ?></title>
				<meta name="description" content="<?php echo $headers['description']; ?>">
				<meta name="designer" content="A Hrtzt">
			<!--Schema-->
				<meta itemprop="name" content="<?php echo $headers['itemprop_name']; ?>">
				<meta itemprop="description" content="<?php echo $headers['itemprop_desc']; ?>">
				<meta itemprop="image" content="<?php site_url(); echo $headers['itemprop_image']; ?>">
			<!--Content info-->
				<meta name="author" content="<?php echo $headers['author']; ?>">
				<meta name="rating" content="General">
				<meta name="resource-type" content="Document">
				<meta name="creation_date" content="<?php echo $headers['creation_date']; ?>">
				<meta name="revised" content="<?php echo $headers['revised_date']; ?>">
				<meta name="distribution" content="global">
				<meta name="coverage" content="Worldwide">
			<!--Icons-->
				<link rel="Shortcut Icon" type="image/ico" href="<?php echo $headers_static['favicon']; ?>">
				<!--[if IE]><link rel="shortcut icon" href="<?php echo $headers_static['favicon']; ?>"><![endif]-->
				<link rel="apple-touch-icon" type="image/png" href="img/apple-touch-icon.png">
				<link rel="apple-touch-startup-image" type="image/png" href="img/apple-startup.png">
			<!--Links-->
				<link rel="canonical" href="<?php page_url(); ?>">
			<!--Style-->
				<link id="style-reset" type="text/css" rel="stylesheet" media="screen,projection" href="css/reset.css">
				<!-- <link id="stile-wpkit-ui" type="text/css" rel="stylesheet" media="screen,projection" href="assets/wpkitui/wpkitui.css"> -->
				<!-- <link id="style-font-awesome" type="text/css" rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css"> -->
				<link id="style-font-awesome" type="text/css" rel="stylesheet" media="screen,projection" href="<?php site_url(); ?>/fonts/font-awesome/font-awesome.css">
				<link id="style-font-opensans" type="text/css" rel="stylesheet" media="screen,projection" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700">
				<link id="style-font-awesome" type="text/css" rel="stylesheet" media="screen,projection" href="<?php site_url(); ?>/fonts/open-sans/open-sans.css">
				<link id="style-main" type="text/css" rel="stylesheet" media="screen,projection" href="style.css">
				<link id="style-theme" type="text/css" rel="stylesheet" media="screen,projection" href="css/theme.css">
			<!--Script-->
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<!-- Assets -->
				<!-- Bootstrap --
					<link id="style-bootstrap" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
				<!--Flickity-->
					<link id="style-flickity" rel="stylesheet" media="screen,projection" href="assets/flickity/flickity.css">
					<script type="text/javascript" src="assets/flickity/flickity.pkgd.min.js"></script>
				<!--Slick-->
					<link id="style-slick" rel="stylesheet" media="screen,projection" href="assets/slick/slick.css">
					<link id="style-slick" rel="stylesheet" media="screen,projection" href="assets/slick/slick-theme.css">
					<script type="text/javascript" src="assets/slick/slick.min.js"></script>
				<!--WPKit UI 2-->
					<link id="style-flickity" rel="stylesheet" media="screen,projection" href="assets/wpkitui2/wpkitui.css">
					<script type="text/javascript" src="assets/wpkitui2/wpkitui.js"></script>
				<!--fancybox-->
					<link type="text/css" rel="stylesheet" media="screen,projection" href="assets/fancybox/source/jquery.fancybox.css?v=2.1.5">
					<link type="text/css" rel="stylesheet" media="screen,projection" href="assets/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5">
					<link type="text/css" rel="stylesheet" media="screen,projection" href="assets/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7">
					<script type="text/javascript" src="assets/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
					<script type="text/javascript" src="assets/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
					<script type="text/javascript" src="assets/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
					<script type="text/javascript" src="assets/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
					<script type="text/javascript" src="assets/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
					<script type="text/javascript">
						$(document).ready(function() {
							$(".fancybox-thumb").fancybox({
								prevEffect	: 'elastic',
								nextEffect	: 'elastic',
								helpers	: {
									title	: {
										type: 'outside'
									},
									thumbs	: {
										width	: 50,
										height	: 50
									}
								}
							});
						});
					</script>

					<script>
					$(document).ready(function() {
						$(".various").fancybox({
							maxWidth	: 800,
							maxHeight	: 600,
							fitToView	: false,
							width		: '70%',
							height		: '70%',
							autoSize	: false,
							closeClick	: false,
							openEffect	: 'none',
							closeEffect	: 'none'
						});
					});
						base= '';
					</script>
				<!--end Fancybox-->
				<!--Social-->
					<!--FB-->
					<meta property="og:locale" content="es-ES">
					<meta property="og:type" content="website">
					<meta property="og:title" content="Título">
					<meta property="og:description" content="Descripción">
					<meta property="og:image" content="img/og-facebook.png">
					<meta property="og:url" content="">
					<meta property="article:author" content="/authorurl">
					<meta property="og:site_name" content="Título del sitio">
					<meta property="article:published_time" content="">
					<meta property="article:modified_time" content="">
					<meta name="fb:page_id" content="0000000x">
					<meta name="og:region" content="MX">
					<meta name="og:country-name" content="Mexico">
				<!--TW-->
					<meta name="twitter:card" content="summary_large_image"><!-- Para artículo -->
					<meta name="twitter:card" content="summary"><!-- Para homepage -->
					<meta name="twitter:site" content="@usuario">
					<meta name="twitter:creator" content="@creadordelcontenido">
					<meta name="twitter:title" content="Título">
					<meta name="twitter:description" content="Descripción">
					<meta name="twitter:image" content="img/twitter-card.png">
				<!--G+-->
					<link rel="me" type="text/html" href="http://www.plus.google.com/usuario">
				<!--development info-->
					<meta name="web_author" content="Alumin.Agency">
					<meta name="designer" content="Alberto Hartzet">
					<meta name="template" content="WPKit Framework">
					<meta name="version" content="2.0">
		</head>


		<body class="<?php echo $headers['body_class']; ?> wpkit-ui">

			<header>

				<p>Header</p>

			</header>

			<main role="main">
