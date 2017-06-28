<?php

	include( '../header.php' );

	$args = array(
		'html_class' 	=> '',
		'body_class' 	=> 'page',
		'title'			=> 'Page title',
		'description'	=> 'Page description',
		'author'		=> 'Page author',
		'itemprop_name' => 'Page itemprop title',
		'itemprop_desc' => 'Page itemprop description',
		'itemprop_image'=> 'img/image.jpg',
		'creation_date' => 'Wednesday, January 27th, 2016, 9:52 am',
		'revised_date'	=> 'Miércoles, enero 27th, 2016, 9:52 am',
		'favicon'		=> 'img/favicon.png',
		'appicon'		=> ''
	);

	get_header( $args );

?>

			<p>Content</p>

			<?php page_url(); ?>

<?php include( '../footer.php' ); ?>
