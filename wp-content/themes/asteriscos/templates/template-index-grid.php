<?php
/*
 * Template Name: Index - Grid
 */

get_header();

// Sections
$titulo = get_field('titulo') ?: '';
$intro = get_field('intro') ?: '';
$items = get_field('items') ?: '';
$numero_por_fila = get_field('numero_por_fila') ?: 2;
$numero_por_fila = 12 / $numero_por_fila;
//d($numero_por_fila);die;
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
    <section class="items">
        <ul>
            <?php foreach($items as $item) : ?>
                <li class="col-md-<?= $numero_por_fila; ?>">
                    <a href="<?= $item['link']['url']; ?>">
                        <img class="imagem-item" src="<?= $item['imagem']['url']; ?>">
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</div>

<?php get_footer(); ?>