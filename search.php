<?php get_header(); ?>

<section class="main-container">
    <h1>Résultats de la recherche</h1>
    <section class="sub-pages-list">
        <nav>
        <?php
        $query = strtolower(get_search_query());
        $queryArray = explode(' ', $query);
        $pages = get_pages();

        foreach ($pages as $page) {

            $pageTitle = strtolower($page->post_title);
            $pageId = $page->ID;

            foreach ($queryArray as $query) {
                if(str_contains($pageTitle, $query)) { ?>
                    <a href="<?php echo $page->guid; ?>">
                        <span class="label"> <?php echo $page->post_title; ?> </span>
                    </a>
                    <?php
                }
            }
        }
        ?>
        </nav>
    </section>
</section>

<?php get_footer(); ?>