<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
    <section class="blocflex">
        <?php 
            wp_nav_menu(array(
                "menu"=>"evenement",
                "container"=>"nav"
            ));
        ?>

    </section>
    <section class="blocflex">
        <div class="section__atelier">
            <h2>Les ateliers du TIM</h2>
            <?php 
                wp_nav_menu(array(
                    "menu"=>"atelier",
                    "container"=>"nav",
                    "container_class" => "menu__evenement"
                ));
            ?>
        </div>
        <?php
            if (have_posts()): 
                while (have_posts()) : the_post(); 
                        $ma_categorie = "4w4";
                        if (in_category('galerie')){
                            $ma_categorie = "galerie";  
                        }    
                    get_template_part("template-parts/categorie", $ma_categorie);
                endwhile;
            endif;    
        ?> 
    </section>
</main>

<?php get_footer(); ?>