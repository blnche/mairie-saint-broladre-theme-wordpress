</main>
<footer>
    <?php
        wp_nav_menu(
            array(
                'menu' => 'footer',
                'theme_location' => 'footer',
                'items_wrap' => '<ul id="" class="">%3$s</ul>'
            )
        )
    ?>
</footer>
<script src="assets/js/main.js"></script>
</body>
</html>