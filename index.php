<?php

$headers = array(
	'html_class' 	=> 'page',
	'body_class' 	=> 'home',
	'title'		=> 'Home Pages',
	'description'	=> 'Descripción de la página para meta etiqueta de descripción',
	'author'		=> 'Autor del sitio',
	'itemprop_name'	=> 'Título para schema.org',
	'itemprop_desc' 	=> 'Descripción para schema.org',
	'itemprop_image'	=> 'img/og-facebook.png',
	'creation_date' 	=> '',
	'revised_date'	=> ''
);

include( 'header.php' ); ?>

			<p>Content</p>
			<button class="uk-button">click</button>
			<?php page_url(); ?>

<?php include( 'footer.php' ); ?>
