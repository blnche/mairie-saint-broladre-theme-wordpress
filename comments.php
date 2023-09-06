//The comments template in classic themes. In block themes, blocks are used instead.
<h2>
<?php
if (! have_comments()) {
    echo 'Laisser un commentaire';
} else {
    echo get_comments_number().' Commentaires';
}
?>
</h2>

<section>
    <?php
    wp_list_comments(
        array (
            'avatar_size' => 120,
            'style' => 'ul' //he put a div, so maybe a section instead ?
        )

    );
    ?>
</section>

<section>
    <?php
    if( comments_open()) {
        comment_form(
            array(
                'class_form' => '',
                'title_replay_before' => '<h2 id="reply-title" class="comment-reply-title">',
                'title_reply_after' => '</h2>'
            )
        );
    }
    ?>
</section>
