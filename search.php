<?php get_header(); ?>

<section class="main-container">
    <h1>Résultats de la recherche</h1>
    <section class="sub-pages-list">
        <nav>
        <?php
        $query = strtolower(get_search_query());
        $queryArray = explode(' ', $query);
        $pages = get_pages();

        $unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );

        foreach ($pages as $page) {

            $pageTitle = strtolower($page->post_title);
            $pageTitleWithoutAccent = strtr($pageTitle, $unwanted_array );
            $pageId = $page->ID;

            foreach ($queryArray as $query) {
                $queryWithoutAccent = strtr($query, $unwanted_array );
                
                if(str_contains($pageTitleWithoutAccent, $queryWithoutAccent)) { ?>
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