<?php
$titre = get_the_title();
$sigle = substr($titre, 0, 7);
$titre_cours = substr($titre, 7, -6); 
$duree = substr($titre, strpos($titre, '('));
?>

<article class="resultat_search">
  <div class="resultat_search_titre">
    <h3> <a href="<?php the_permalink(); ?>"> <?= $titre_cours; ?></a></h3>
    <h3>Sigle: <?= $sigle ?></h3>
    <p> <?= wp_trim_words(get_the_excerpt(), 20) ?> </p>
    <h6> Durée: <?= $duree; ?> </h6>
    <p>Enseignant: <?php the_field('enseignant'); ?>
    <br>Domaine: <?php the_field('domaine'); ?></br>
  </div>
  <div class="resultat_search_resume"> <?= wp_trim_words(get_the_excerpt(), 50) ?></div>
</article>



