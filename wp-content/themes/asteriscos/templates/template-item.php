<?php
/*
 * Template Name: Item
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
    <?php if ($log['conteudo']) : ?>
        <!-- Log -->
        <section class="log" style="background-color: <?= $log['cor']; ?>">
            <article>
                <?= $log['conteudo']; ?>
            </article>
        </section>
    <?php endif; ?>
</div>

<?php get_footer(); ?>