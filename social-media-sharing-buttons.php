<?php
/*
Plugin Name: Social Media Sharing Buttons
Description: Este plugin agrega botones para compartir publicaciones en redes sociales.
Version: 1.0
Author: Simon Agredo
*/

add_action( 'wp_footer', 'social_media_sharing_buttons' );

function social_media_sharing_buttons() {

// Obtener el actual post
$post = get_post();

// traer el titulo del post
$title = $post->post_title;

// Traer la URL post
$url = get_permalink( $post );

// Traer los botones de redes sociales
$buttons = array(
  'facebook' => array(
    'label' => 'Facebook',
    'url' => 'https://www.facebook.com/sharer/sharer.php?u=' . $url,
  ),
  'twitter' => array(
    'label' => 'Twitter',
    'url' => 'https://twitter.com/intent/tweet?url=' . $url . '&text=' . $title,
  ),
  'linkedin' => array(
    'label' => 'LinkedIn',
    'url' => 'https://www.linkedin.com/shareArticle?mini=true&url=' . $url,
  ),
);

// hacer un bucle de los botones para compartir en las redes sociales
foreach ( $buttons as $button ) {
  echo '<a href="' . $button['url'] . '" class="social-media-sharing-button" target="_blank">' . $button['label'] . '</a>';
}

}

?>