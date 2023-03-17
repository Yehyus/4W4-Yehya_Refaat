<?php
$titre = get_the_title();
$sigle = substr($titre,0,7); 
$titre_long = substr($titre,7,-5); 
$duree = substr($titre,-5,5)
?>

<?php get_header(); ?>
<main class="single">
    <h1><?= $titre ?></h1>
    <?php if(have_posts()) :
        while (have_posts()) : the_post();
        the_content();?>
        <hr>
    <?php endwhile;
endif;
?>
</main>