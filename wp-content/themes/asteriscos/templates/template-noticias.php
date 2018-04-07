<?php
/*
 * Template Name: Noticias
 */

//get_header();

// Sections
$intro = get_field('intro') ?: [];
$projetos = get_field('projetos') ?: [];
$orgaosSociais = get_field('orgaos_sociais') ?: [];
$rodape = get_field('rodape') ?: [];


$args = array(
	'posts_per_page'   => 5,
	'offset'           => 0,
	'category'         => 'qoticias, qestaque',
	'category_name'    => '',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'author'	   => '',
	'author_name'	   => '',
	'post_status'      => 'publish',
	'suppress_filters' => true
);
$posts_array = get_posts( $args );

$custom_posts = new WP_Query( array(
	'order_by' => 'title',
	'order'    => 'asc'
));

d($custom_posts->have_posts());die;
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

    <section>
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="http://placehold.it/760x400/cccccc/ffffff">
                        <div class="carousel-caption">
                            <h4><a href="#">Lorem ipsum dolor sit amet consetetur sadipscing</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
                        </div>
                    </div><!-- End Item -->

                    <div class="item">
                        <img src="http://placehold.it/760x400/999999/cccccc">
                        <div class="carousel-caption">
                            <h4><a href="#">consetetur sadipscing elitr, sed diam nonumy eirmod</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
                        </div>
                    </div><!-- End Item -->

                    <div class="item">
                        <img src="http://placehold.it/760x400/dddddd/333333">
                        <div class="carousel-caption">
                            <h4><a href="#">tempor invidunt ut labore et dolore</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
                        </div>
                    </div><!-- End Item -->

                    <div class="item">
                        <img src="http://placehold.it/760x400/999999/cccccc">
                        <div class="carousel-caption">
                            <h4><a href="#">magna aliquyam erat, sed diam voluptua</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
                        </div>
                    </div><!-- End Item -->

                    <div class="item">
                        <img src="http://placehold.it/760x400/dddddd/333333">
                        <div class="carousel-caption">
                            <h4><a href="#">tempor invidunt ut labore et dolore magna aliquyam erat</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
                        </div>
                    </div><!-- End Item -->

                </div><!-- End Carousel Inner -->


                <ul class="list-group col-sm-4">
                    <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active"><h4>Lorem ipsum dolor sit amet consetetur sadipscing</h4></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>consetetur sadipscing elitr, sed diam nonumy eirmod</h4></li>
                    <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4>tempor invidunt ut labore et dolore</h4></li>
                    <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4>magna aliquyam erat, sed diam voluptua</h4></li>
                    <li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><h4>tempor invidunt ut labore et dolore magna aliquyam erat</h4></li>
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
        </div>
    </section>

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