<?php
//Template Name: Sobre
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="container sobre">
            <h1 class="subtitulo"><?php the_title(); ?></h1>
            <?php echo the_content(); ?>
        </section>

<?php endwhile;
else : endif; ?>
<?php get_footer(); ?>