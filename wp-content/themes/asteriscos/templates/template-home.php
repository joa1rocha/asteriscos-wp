<?php
/*
 * Template Name: Home
 */

get_header();

// Sections
$intro = get_field('intro') ?: [];
$projetos = get_field('projetos') ?: '';
$orgaosSociais = get_field('orgaos_sociais') ?: [];
$rodape = get_field('rodape') ?: [];

$noticias = buscarNoticias(6);
// make first item Active
if (count($noticias)) {
	$noticias[0]['active'] = true;
}
?>

<!-- Main -->
<div id="main">

    <!-- Featured Post -->
    <section class="post featured">
        <header class="major">
            <h2><?= $intro['titulo']; ?></h2>
            <?= $intro['texto']; ?>
            <img class="image main" src="<?= $intro['imagem']['url']; ?>"/>
        </header>
    </section>

    <h1>NOTICIAS</h1>
    <section class="noticias">
        <div id="myCarousel" class="carousel" data-ride="">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
			    <?php foreach($noticias as $noticia) : ?>
                    <div class="item <?= $noticia['active'] ? 'active' : '' ?>">
                        <img src="<?= $noticia['imagem']['url']; ?>">
                        <div class="carousel-caption">
                            <h2><a href="<?= $noticia['url']; ?>"><?= $noticia['titulo']; ?></a></h2>
                            <p><?= $noticia['resumo']; ?></p>
                        </div>
                    </div><!-- End Item -->
			    <?php endforeach; ?>
            </div><!-- End Carousel Inner -->


            <ul class="list-group">
			    <?php $count = 0; ?>
			    <?php foreach($noticias as $noticia) : ?>
                    <li data-target="#myCarousel"
                        data-slide-to="<?= $count; ?>"
                        class="list-group-item col-xs-2 list-group-item <?= $noticia['active'] ? 'active' : '' ?>">
                        <h5><?= $noticia['titulo']; ?></h5>
					    <?php $count++; ?>
                    </li>
			    <?php endforeach; ?>
            </ul>

            <!-- Controls -->
            <div class="carousel-controls">
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>

        </div><!-- End Carousel -->
    </section>

    <h1>PROJETOS</h1>
    <section class="posts projetos">
        <article>
		    <?= $projetos; ?>
        </article>
    </section>

    <!-- Footer -->
    <h1>Órgãos Sociais</h1>
    <?php foreach($orgaosSociais as $orgaoSocial) : ?>
        <p><strong><?= $orgaoSocial['titulo']; ?></strong> <?= $orgaoSocial['texto']; ?></p>
    <?php endforeach; ?>
</div>

<?php get_footer(); ?>