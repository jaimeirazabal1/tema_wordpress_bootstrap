<?php
/*se pueden crear otros menu y cambiandole el nombre de referencia
se pueden llamar en cualquier parte de la pagina*/
register_nav_menus( array(
  'menu'=>'Menu Superior',
  'menu_footer'=>'Menu en pie de pagina'
) );

add_theme_support( 'post-thumbnails' );
add_image_size( $name="slider_thumbs", $width = 900, $height = 400, $crop = true );
add_image_size( $name="list_articles_thumbs", $width = 450, $height = 370, $crop = true );
/*se pueden crear otros sidebar y cambiandole el nombre de referencia
se pueden llamar en cualquier parte de la pagina*/
register_sidebar(array(
  'name' => 'Sidebar',
  'before_widget' => '<section class="widget">',
  'after_widget' => '</section>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
) );

?>
