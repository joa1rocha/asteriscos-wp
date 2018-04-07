<?php
/*
 * Template Name: Noticias
 * Template Post Type: post
 */

get_header();

// Sections
$titulo = get_field('titulo') ?: '';
$texto = get_field('texto') ?: '';
$imagem = get_field('imagem') ?: '';
?>
    <!-- Main -->
    <div id="main">
        <!-- Featured Post -->
        <article class="post featured">
            <header class="major">
            <h2><?= $titulo; ?></h2>
        </header>
    </article>
    <!-- Posts -->
    <section class="post">
        <article>
            <img class="imagem-item" src="<?= $imagem['url']; ?>">
            <?= $texto; ?>
        </article>
    </section>
</div>

<?php get_footer(); ?>