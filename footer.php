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
    <p>Thème créé par <a href="https://github.com/blnche">Blanche Peltier</a>. Icônes par <a href="https://icons8.com/">Icons8.</a></p>
</footer>
<script src="assets/js/main.js"></script>
</body>
</html>