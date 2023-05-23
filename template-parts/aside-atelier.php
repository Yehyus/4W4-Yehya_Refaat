<aside class="site__aside">  
  <?php 
    the_post_thumbnail(array(150, 150));
  ?>

  <h3>Atelier</h3>

  <?php 
  wp_nav_menu(array(
    "menu" => 'atelier',
    "container" => "nav"
  )) ;
  ?>
    
</aside>