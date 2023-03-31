<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="site__main no-aside">
<h2 class="titre_search">Résultats de la recherche</h3>
<?php
    if (have_posts()): 
        while (have_posts()) : the_post();
        
    if (in_category('cours')) {
        get_template_part('template-parts/search-cours', 'cours');
    } 
    
    else {
        get_template_part('template-parts/search-4w4');
    }
?>

<hr class="line_search">
    
<?php 
    endwhile;
    endif;
?>
</main>
<?php get_footer(); ?>