<?php
/*
 * Template Name: Voluntario
 */

get_header();

// Sections
$titulo = get_field('titulo') ?: '';
$conteudo = get_field('conteudo') ?: '';
$imagem = get_field('imagem') ?: '';
$log = get_field('log') ?: [];
?>
    <!-- Main -->
    <div id="main" class="items">
        <!-- Featured Post -->
        <article class="post featured">
            <header class="major">
            <h2><?= $titulo; ?></h2>
        </header>
    </article>
    <!-- Posts -->
    <section class="post">
        <article>
            <div class="conteudo">
                <img class="imagem-item" src="<?= $imagem['url']; ?>">
                <?= $conteudo; ?>
            </div>
        </article>
    </section>
</div>

<?php get_footer(); ?>