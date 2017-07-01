<?php
/**
*
* @see header.php $headers
* @see functions.php $headers_static
*
*/

	$headers = array(
		'html_class' 	=> 'page',
		'body_class' 	=> 'home',
		'title'		=> 'Home Pages',
		'description'	=> 'Descripción de la página para meta etiqueta de descripción',
		'author'		=> 'Autor del sitio',
		'itemprop_name'	=> 'Título para schema.org',
		'itemprop_desc' 	=> 'Descripción para schema.org',
		'itemprop_image'	=> 'img/og-facebook.png',
		'creation_date' 	=> 'Miércoles, junio 28th, 2017, 4:09 pm',
		'revised_date'	=> 'Miércoles, junio 28th, 2017, 4:09 pm'
	);

include( '../header.php' ); ?>

			<p>Content</p>
			<button class="wk-button">click</button>
			<?php page_url(); ?>

<?php include( '../footer.php' ); ?>
