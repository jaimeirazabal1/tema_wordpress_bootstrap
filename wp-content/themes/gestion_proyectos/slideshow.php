<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php $c=0 ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $c ?>"></li>
    <?php $c++ ?>
    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $c=0 ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php if ($c==0): ?>
        <div class="item active">
            <center>
              <a href="<?php the_permalink() ?>">
                <?php if (has_post_thumbnail()){ the_post_thumbnail( 'slider_thumbs','alt="Imagen No Cargada"' ); }?>
              </a>
            </center>
          <div class="carousel-caption">
            <h3><?php the_title( $before = '', $after = '', $echo = true ); ?></h3>

          </div>
        </div>
      <?php else: ?>
        <div class="item">
          <center>
            <a href="<?php the_permalink() ?>">
              <?php if (has_post_thumbnail()){ the_post_thumbnail( 'slider_thumbs','alt="Imagen No Cargada"' ); }?>
            </a>
          </center>
          <div class="carousel-caption">
            <h3><?php the_title( $before = '', $after = '', $echo = true ); ?></h3>

          </div>
        </div>
      <?php endif; ?>
      <?php $c++ ?>
  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
