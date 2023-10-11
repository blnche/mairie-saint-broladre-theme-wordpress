<?php get_header(); ?>

<?php // ASSOCIATIONS
if (get_field('association_true_false', get_the_ID() === true )) {
?>
<article class="single flex">
    
    <section class="text">
        <?php the_content(); ?>
    </section>
    
    <section class="img">
        
    </section>
    <address>
        <?php
        $address = get_field('adresse_postale', get_the_ID());
        $email = get_field('adresse_email', get_the_ID());
        $phone = get_field('numero_de_telephone', get_the_ID());
        ?>
        <p>
            Adresse : <?php echo $address ?>
        </p>
        <?php if(!empty($email)) { ?>
            <a href="mailto:<?php echo $email ?>"> <?php echo $email ?> </a> <?php
        }?>
        <?php if(!empty($phone)) { ?>
            <a href="tel:+33<?php echo $phone ?>"> <?php echo '0'.$phone ?> </a> <?php
        }
        ?>
    </address>
    <?php
?>
</article>
<?php
}
else {
    ?>
    <article class="single projet flex">
        <?php the_content(); ?>
</article>
<?php
    }
?>

<?php get_footer(); ?>

