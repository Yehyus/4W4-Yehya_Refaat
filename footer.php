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


</footer>
<?php wp_footer(); ?>
</body>
</html>