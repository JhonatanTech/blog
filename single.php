<?php get_header(); ?>

<section class="container">
    <div class="heading">
        <h1 class="subtitulo"><?php the_title(); ?></h1>
        <p class="date">
            <span class="material-icons-round">today</span>
            <?php echo get_the_time('d/m/Y', get_post()->ID); ?>
        </p>
        <p class="author">
            <span class="material-icons-round">person</span>
            <a href="<?php echo esc_url(get_author_posts_url(get_post()->post_author)); ?>"><?php echo get_the_author_meta('display_name', get_post()->post_author); ?></a>
        </p>
        <p><?php the_excerpt(); ?></p>
        <?php the_post_thumbnail('full'); ?>
    </div>
    <hr>
    <div class="content"><?php echo the_content(); ?></div>
</section>

<?php get_footer(); ?>