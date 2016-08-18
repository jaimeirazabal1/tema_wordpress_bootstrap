<?php get_header() ?>

<br />
<?php if (have_posts()):

    while( have_posts()): the_post(); ?>
  <!-- Codigo que ejecutara cuando encuentren articulos-->



        <!--<img src="<?php //the_permalink(); ?>" alt="Imagen">-->
        <a href="<?php the_permalink() ?>">
          <center>
              <?php the_post_thumbnail( ) ?>
          </center>
        </a>
        <div class="caption">
          <h2><?php the_title( $before = '', $after = '', $echo = true ); ?></h2>
          <small><?php the_date(); ?> en <span class="category"><?php the_category( $separator = '', $parents = '', $post_id = false ); ?><span></small>
          <p><?php the_content(); ?></p>
        </div>


<?php endwhile;  else: ?>
  <!-- Aqui el codigo que ejecutara cuando no encuentra articulos -->
  <h1>No se encontraron artículos</h1>
<?php endif; ?>



<?php get_sidebar() ?>
<?php get_footer() ?>
