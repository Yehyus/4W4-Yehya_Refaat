<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>
  <header class="site__header">
    <section class="site__header__logo">
      <div class="logomenu">
        <?php the_custom_logo(); ?>
        <?php wp_nav_menu(array(
          "menu" => "entete",
          "container" => "nav"
          ))?>
      </div>
      <?php get_search_form() ?>
    </section>
    <h2><?= bloginfo('description')?></h2>
  </header>
  
