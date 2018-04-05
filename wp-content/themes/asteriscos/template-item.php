<?php
/*
 * Template Name: Item
 */

get_header();

// Sections
$titulo = get_field('titulo') ?: '';
$conteudo = get_field('conteudo') ?: '';
$imagem = get_field('imagem') ?: '';

// Data
setlocale(LC_TIME, 'pt_PT', 'pt_BR.utf-8', 'pt_PT.utf-8', 'portuguese');
$hoje = strftime('%d de %B, %Y', strtotime('today'));
?>
    <!-- Main -->
    <div id="main">
        <!-- Featured Post -->
        <article class="post featured">
            <header class="major"><span class="date"><?= $hoje; ?></span>
            <h2><?= $titulo; ?></h2>
        </header>
    </article>
    <!-- Posts -->
    <section class="post">
        <article>
            <img class="imagem-item" src="<?= $imagem['url']; ?>">
            <?= $conteudo; ?>
        </article>
    </section>
</div>

<?php get_footer(); ?>