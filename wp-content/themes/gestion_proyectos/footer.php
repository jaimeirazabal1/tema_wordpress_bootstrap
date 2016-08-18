  <footer>
    <div class="redes">
      <?php wp_nav_menu(
        array(
          'container'=>false,
          'items_wrap'=>'<ul id="menu-top" class="nav nav-pills">%3$s</ul>',
          'theme_location'=>'menu_footer'
        )
      ) ?>
    </div>
    <p>
      Creado Por Jaime Irazabal - jaimeirazabal1@gmail.com
    </p>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
