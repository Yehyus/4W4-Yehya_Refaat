<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
    <main>
        <pre>front-page.php</pre>
        <section class="blocflex">
            <?php if (have_posts()): 
                while (have_posts()) : the_post(); 
                    $la_categorie = '4w4';
                    if(in_category('galerie')) {
                        $la_categorie = "galerie"; }
                    get_template_part('template-parts/categorie', $la_categorie);
                    endwhile;
                endif; ?>
        </section>
    </main> 
<?php get_footer(); ?>