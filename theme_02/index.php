<?php
/**
 * Some docs
 *
 * @package theme
 */

$context          = Timber::get_context();
$context['posts'] = Timber::get_posts();

Timber::render( 'views/templates/index.twig', $context );
