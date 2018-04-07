<?php
/*
 * Template Name: Index - Grid
 */

get_header();

// Sections
$titulo = get_field('titulo') ?: '';
$intro = get_field('intro') ?: '';
$items = get_field('items') ?: '';
?>
    <!-- Main -->
    <div id="main">
        <!-- Featured Post -->
        <article class="post featured">
            <header class="major">
            <h2><?= $titulo; ?></h2>
            <?= $intro; ?>
        </header>
    </article>
    <!-- Posts -->
    <section class="posts items">
        <?php foreach($items as $item) : ?>
            <article>
                <a href="<?= $item['link']['url']; ?>">
                    <h2><?= $item['titulo']; ?></h2>
                    <img class="imagem-item" src="<?= $item['imagem']['url']; ?>">
                    <?= $item['sumario']; ?>
                </a>
            </article>
        <?php endforeach; ?>
    </section>
</div>

<?php get_footer(); ?>