<?php
$categories = get_categories(array(
    'orderby' => 'name',
    'order'   => 'ASC'
));
?>

<footer>
    <nav class="container">
        <div class="about">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-footer.svg" alt="Código com café">
            <p class="slogan">Programando ideias, saboreando inspirações.</p>
            <p>Este é o lugar perfeito para os amantes de café e programação. Aqui você encontrará artigos, tutoriais e dicas sobre programação, desenvolvimento web, tecnologia e muito mais, tudo isso acompanhado de uma boa xícara de café.</p>
        </div>
        <hr>
        <div class="links">
            <div class="itens">
                <h2>Categorias</h2>
                <ul>
                    <?php
                    foreach ($categories as $category) {
                        echo   $category_link = sprintf(
                            '<li><a href="%1$s" alt="%2$s">%3$s</a></li>',
                            esc_url(get_category_link($category->term_id)),
                            esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
                            esc_html($category->name)
                        );
                    }
                    ?>
                </ul>
            </div>
            <div class="itens">
                <h2>Parceiros</h2>
                <ul>
                    <li><a href="mailto:jhonatancarvalhotorres12@gmail.com">Seja um parceiro</a></li>
                </ul>
            </div>
            <div class="itens">
                <h2>Redes sociais</h2>
                <ul class="redes">
                    <li><a href="https://www.linkedin.com/in/jhonatantech/"><span class="icon-linkedin"></span>linkedin</a></li>
                    <li><a href="https://www.facebook.com/"><span class="icon-facebook"></span>facebook</a></li>
                    <li><a href="https://www.instagram.com/"><span class="icon-instagram"></span>instagram</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <p>© Código com café - Todos os direitos reservados. Criado com amor e café ☕</p>
</footer>

<!-- Footer WordPress -->
<?php wp_footer(); ?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
</body>

</html>