<?php get_header() ?>


<h2 class="cat_name"><?php single_cat_title( $prefix = '', $display = true ) ?></h2>
<?php if (have_posts()):

    echo '<div class="row"> <br />';
    while( have_posts()): the_post(); ?>
  <!-- Codigo que ejecutara cuando encuentren articulos-->

    <div class="col-sm-6 col-md-4" >
      <div class="thumbnail">
        <!--<img src="<?php //the_permalink(); ?>" alt="Imagen">-->
        <a href="<?php the_permalink() ?>">
          <?php if (has_post_thumbnail()){ the_post_thumbnail( 'list_articles_thumbs','alt="Imagen No Cargada"' ); }?>
        </a>
        <div class="caption">
          <h3><?php the_title( $before = '', $after = '', $echo = true ); ?></h3>
          <small><?php the_date(); ?> en <span class="category"><?php the_category( $separator = '', $parents = '', $post_id = false ); ?><span></small>
          <p><?php the_excerpt(); ?></p>
          <p><a href="<?php the_permalink(); ?>" class="btn btn-primary" role="button">Ver</a>
            <!-- <a href="#" class="btn btn-default" role="button">Button</a>-->
          </p>
        </div>
      </div>
    </div>

<?php endwhile; echo '</div>'; else: ?>
  <!-- Aqui el codigo que ejecutara cuando no encuentra articulos -->
  <h1>No se encontraron artículos</h1>
<?php endif; ?>
<nav aria-label="">
  <ul class="pager">
    <li><?php previous_post_link( $format = '%link &raquo;', $link = 'Anterior', $in_same_term = false, $excluded_terms = '', $taxonomy = 'category' ) ?></li>
    <li><?php next_post_link( $format = '%link &raquo;', $link = 'Siguiente', $in_same_term = false, $excluded_terms = '', $taxonomy = 'category' ) ?></li>
  </ul>
</nav>

<?php get_sidebar() ?>
<?php get_footer() ?>
