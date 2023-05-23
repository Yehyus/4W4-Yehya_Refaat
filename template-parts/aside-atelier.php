<aside class="site__aside">
    <h3>Atelier</h3>
    <?php 
      $nouvelle_classe = "";
      if (is_front_page() || 
          (! in_category("cours") && ! in_category("4w4")) ){
            $nouvelle_classe = 'no-aside';
        }

      if (is_page_template('template-atelier.php')) {
           $nouvelle_classe = '';
        }
     ?>
</aside>