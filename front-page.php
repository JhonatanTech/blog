<?php get_header(); ?>

<section class="about">
    <div class="content container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bg-friends.svg" alt="Caneca com código">
        <div class="text">
            <h1>Bem-vindo ao nosso blog de programação com tema de café!</h1>
            <p>Somos um grupo de entusiastas de tecnologia que amam programação e café. Criamos este blog para compartilhar nosso conhecimento e paixão por essas duas coisas, e para oferecer um espaço colaborativo para programadores de todos os níveis.
        </div>
    </div>
</section>

<section class="posts">
    <h2>Últimos posts! ☕</h2>
    <?php
    $args = array(
        'numberposts'      => 3,
        'orderby'          => 'date',
        'order'            => 'DESC',
    );
    $my_posts = get_posts($args);
    //var_dump($my_posts); 
    ?>

    <div class="container">
        <?php if (!empty($my_posts)) {
            foreach ($my_posts as $p) { ?>
                <div class="post">
                    <?php echo get_the_post_thumbnail($p->ID) ? get_the_post_thumbnail($p->ID) : '<img src="' . get_stylesheet_directory_uri() . '/img/bg-about.jpg" alt="Caneca">'; ?>
                    <div class="preview">
                        <p class="date">
                            <span class="material-icons-round">today</span>
                            <?php echo get_the_time('d/m/Y', $p->ID); ?>
                        </p>
                        <p class="date">
                            <span class="material-icons-round">person</span>
                            <?php echo get_the_author_meta('display_name', $p->post_author); ?>
                        </p>
                        <h3><?php echo $p->post_title; ?></h3>
                        <p><?php echo $p->post_excerpt; ?></p>
                        <a href="<?php echo get_permalink($p->ID); ?>">Quero ler este post!<span class="material-icons-round">arrow_forward</span></a>
                    </div>
                </div>
        <?php }
            wp_reset_postdata();
        } ?>
    </div>
</section>

<section class="benefits">
    <div class="container">
        <div class="benefit">
            <span class="material-icons-round">insights</span>
            <h2>Aprendizado constante</h2>
            <p>Informações valiosas para aprimorar habilidades de programação, lendo enquanto desfruta de uma xícara de café.</p>
        </div>
        <div class="benefit">
            <span class="material-icons-round">account_tree</span>
            <h2>Compartilhamento</h2>
            <p>Um blog de programação com tema de café pode ser um espaço colaborativo para a troca de conhecimento e experiências entre programadores.</p>
        </div>
        <div class="benefit">
            <span class="material-icons-round">school</span>
            <h2>Inspiração</h2>
            <p>A associação com o café pode estimular a criatividade e inspiração para soluções inovadoras em projetos de programação.</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>