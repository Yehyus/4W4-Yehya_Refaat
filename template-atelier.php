<?php
/**
* template name: Atelier
*/
get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail('medium') ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<p>Le formateur de l'atelier: <?php the_field('formateur'); ?></p>
<p>Le local de l'atelier: <?php the_field('local'); ?></p>     
<p>La date de l'ateler: <?php the_field('date_de_latelier'); ?></p>
<p>L'heure de la formation: <?php the_field('heure_de_la_formation'); ?></p>
<p>La durée de la formation: <?php the_field('duree'); ?></p>
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();