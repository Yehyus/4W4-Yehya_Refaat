<footer class="site__footer">
<section><?php the_custom_logo() ?></section>
<?php wp_nav_menu(array(
    "menu" => "footer",
    "container" => "nav"
)) ?>

<?php wp_nav_menu(array(
    "menu" => "footer2",
    "container" => "nav"
)) ?>


<svg data-src="https://s2.svgbox.net/social.svg?ic=github" width="32" height="32" color="#000000"></svg>
</footer>
<?php wp_footer(); ?>
</body>
</html>