<?php 
$titre = get_the_title();
$sigle = substr($titre,0,7);
$titre_long = substr($titre,7,-5); 
$duree = substr($titre,strpos($titre, '('));
?>  

<article class="blocflex__article">
    <h3><a href="<?php the_permalink(); ?>"> <?= $sigle ?></a></h3>
    <h5><?= $titre_long ?></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 100) ?></p>
    <h5><?= $duree ?></h5>
    <p><?php the_field('enseignant') ?></p>
    <p><?php the_field('domaine') ?></p>
</article>