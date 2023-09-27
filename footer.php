</section>
</main>
<footer class="footer">
    <section class="container">
    <?php
        wp_nav_menu(
            array(
                'menu' => 'footer',
                'theme_location' => 'footer',
                'items_wrap' => '<ul id="" class="">%3$s</ul>'
            )
        )
    ?>
    </section>

    <p>Thème créé par <a href="#">Blanche Peltier</a>. Icônes par <a href="https://icones8.fr/">Icons8</a>, et couleurs par <a href="https://www.radix-ui.com/colors">Radix</a>.</p>
</footer>
</body>
</html>