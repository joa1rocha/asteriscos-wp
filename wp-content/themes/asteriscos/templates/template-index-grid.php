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
    <div id="main" class="index-grid">
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
                    <img class="imagem-item" src="<?= $item['imagem']['url']; ?>">
                </a>
            </article>
        <?php endforeach; ?>
    </section>
</div>

<?php get_footer(); ?>