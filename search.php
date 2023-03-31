<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="site__main no aside">
<h3>Résultats de la recherche</h3>
<article class="resultat_search">
<?php
    if (have_posts()): 
        while (have_posts()) : the_post();
?>
        <div class="resultat_search_titre">
        <h4 ><a href="<?php the_permalink(); ?>"> <?= get_the_title(); ?></a></h4></div>
        <div class="resultat_search_resume"> <?= wp_trim_words(get_the_excerpt(), 50) ?></div>
        <hr>
    <?php endwhile;
endif;
?>
</article>
</main>

<?php get_footer(); ?>