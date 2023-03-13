<aside class="site__aside">
    <h3>Menu secondaire</h3>
    <?php 
    $mon_menu  = "Menu note cours";
    if (in_category('cours')){
        $mon_menu  = "aside";
    }
    wp_nav_menu(array(
        "menu" => $mon_menu,
        "container" => "nav"  
    )); ?>
</aside>