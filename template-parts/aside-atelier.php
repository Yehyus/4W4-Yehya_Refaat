<aside class="site__aside">
    <h3>Atelier</h3>
    <?php 
      $ma_categorie = "4w4";
      if (in_category("atelier")){
            $ma_categorie = 'atelier';
        }

      wp_nav_menu(array(
        "menu" => $ma_categorie,
        "container" => "nav"
      ));
     ?>
</aside>