<?php
/*
 * Template Name: Home
 */

get_header();

// Sections
$intro = get_field('intro') ?: [];
$orgaosSociais = get_field('orgaos_sociais') ?: [];
$rodape = get_field('rodape') ?: [];
$entreAsteriscosUrl = get_field('entre_asteriscos') ?: '#';

$projetos = buscarProjetos();
$noticias = buscarNoticias(6);
// make first item Active
if (count($noticias)) {
	$noticias[0]['active'] = true;
}
?>

<!-- Main -->
<div id="main" class="home">

    <!-- Featured Post -->
    <section class="post featured">
        <header class="major">
            <h2><?= $intro['titulo']; ?></h2>
            <?= $intro['texto']; ?>
            <img class="image main" src="<?= $intro['imagem']['url']; ?>"/>
        </header>
    </section>

    <h1>NOTÍCIAS</h1>
    <section class="noticias">
        <div id="myCarousel" class="carousel" data-ride="">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
			    <?php foreach($noticias as $noticia) : ?>
                    <div
                        class="item <?= $noticia['active'] ? 'active' : '' ?>"
                        style='background-image: url(<?= $noticia['imagem']['url']; ?>)'
                    >
                        <a href="<?= $noticia['url']; ?>">
                            <div class="carousel-caption">
                                <h2><?= $noticia['titulo']; ?></h2>
                                <p><?= $noticia['resumo']; ?></p>
                            </div>
                        </a>
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
    <?php if (count($projetos)) : ?>
        <h1>PROJETOS</h1>
        <section class="posts projetos">
            <article>
                <div class="owl-carousel owl-theme">
	                <?php foreach($projetos as $projeto) : ?>
                        <a href="<?= $projeto['link']; ?>">
                            <div class="owl-item-inner" style="background-image: url(<?= $projeto['imagem']['url']; ?>);">
                                <?php if ($projeto['mostrarTitulo']) : ?>
                                    <p class="titulo"><?= $projeto['titulo'] ?:''; ?></p>
                                <?php endif; ?>
                                <div class="mais">
                                    <p>Mais informação</p>
                                </div>
                            </div>
                        </a>
	                <?php endforeach; ?>
                </div>
            </article>
        </section>
    <?php endif; ?>
    <section class="entre-asteriscos">
        <article>
            <a href="<?= $entreAsteriscosUrl ?>">
                <div class="main">
                    <div class="left hidden-xs col-md-4">
                        <h3>Opinião</h3>
                        <p>@Jornal de Leiria</p>
                    </div>
                    <div class="center col-sm-12 col-md-4">
                        <h2>
                            <p>Entre<br>Asteriscos</p>
                        </h2>
                    </div>
                    <div class="right hidden-xs col-md-4">
                </div>
             </div>
            </a>
        </article>
    </section>
</div>

<?php get_footer(); ?>