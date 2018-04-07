<?php
/*
 * Template Name: Home
 */

get_header();

// Sections
$intro = get_field('intro') ?: [];
$projetos = get_field('projetos') ?: [];
$orgaosSociais = get_field('orgaos_sociais') ?: [];
$rodape = get_field('rodape') ?: [];
?>

<!-- Main -->
<div id="main">

    <!-- Featured Post -->
    <article class="post featured">
        <header class="major">
            <h2><?= $intro['titulo']; ?></h2>
            <?= $intro['texto']; ?>
            <img class="image main" src="<?= $intro['imagem']['url']; ?>"/>
        </header>
    </article>

    <h1>PROJETOS</h1>
    <!-- Posts -->
    <section class="posts projetos">
        <?php foreach($projetos as $projeto) : ?>
            <article>
                <img class="imagem-projeto" src="<?= $projeto['imagem']['url']; ?>">
                <?= $projeto['descricao']; ?>
            </article>
        <?php endforeach; ?>
    </section>

    <!-- Footer -->
    <h1>Órgãos Sociais</h1>
    <?php foreach($orgaosSociais as $orgaoSocial) : ?>
        <p><strong><?= $orgaoSocial['titulo']; ?></strong> <?= $orgaoSocial['texto']; ?></p>
    <?php endforeach; ?>
</div>

<?php get_footer(); ?>