<?php
$titre = get_the_title();
if (substr($titre, 0, 1) == '0') {
  $titre = substr($titre, 1);
}
?>

<article class="resultat_search">
  <div class="resultat_search_titre">
    <h3><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h3>
  </div>
  <div class="search_resultat_extrait"> <?= wp_trim_words(get_the_excerpt(), 50) ?></div>
</article>