<?php

/**
 * Template Name: inicio
 */

get_header();
$esLang = pll_current_language() == 'es';
?>

<?php
$banners = (new WP_Query(array(
    "post_type" => "banner",
)))->posts;

// print_r($banners);
?>

<section id="banner-principal">
    <div class="container-fluid p-0">
        <div class="slider-banner swiper">
            <div class="swiper-wrapper">
                <?php
                $i=1;
                foreach ($banners as $banner) :
                    $autoplay = $i == 1 ? "autoplay" : '' ; 
                    $id = $i == 2 ? "lazyTest":'';
                    $enlace_boton = get_field('enlace_boton', $banner->ID);
                    $texto_boton = get_field('texto_boton', $banner->ID);
                    $condicional = get_field('desea_agregar_un_video', $banner->ID);
                    if ($condicional) {
                        $video = get_field('video', $banner->ID);
                ?>
                <div class="swiper-slide banner-item img-fit swiper-lazy">
                    <video id="<?=$id; ?>" class="position-absolute lazy" <?=$autoplay?> width="100%" height="100%"
                        poster="<?= get_the_post_thumbnail_url($banner->ID) ?>" muted="" loop="true" preload="none">

                        <source src="<?= $video["url"]; ?>" type="video/mp4">
                        <!-- <source src="<?= $video["url"]; ?>" type="video/ogv">
                                <source src="<?= $video["url"]; ?>" type="video/webm"> -->
                    </video>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 banner-text">
                                <h1 class="section-title"> <?= $banner->post_title; ?> </h1>
                                <a href="<?= $enlace_boton; ?>" class="ord-btn line-btn"><?= $texto_boton; ?> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } else {
                        $imagen = get_field('imagen', $banner->ID);
                    ?>

                <div class="swiper-slide banner-item img-fit">
                    <img class="image-banner" src=" <?= $imagen["url"]; ?>" alt="">
                    <div class="col-md-9 banner-text">
                        <h1 class="section-title"> <?= $banner->post_title; ?> </h1>
                        <a href="<?= $enlace_boton; ?>" class="ord-btn line-btn"> <?= $texto_boton; ?> </a>

                    </div>
                </div>
                <?php
                    }
                    $i++;
                endforeach;
                ?>
            </div>
            <div class="banner-pagination"></div>
        </div>

    </div>
</section>


<?php
$card = get_field('card');
$imagen = $card['imagen'];
$informacion = $card['informacion'];
?>
<section id="card">
    <div class="container" data-scroll data-scroll-speed="2">
        <div class="row m-left">
            <div class="col-md-12">
                <div class="card-item">
                    <div class=" card-principal">
                        <div class="col-md-5 card-image img-fit">
                            <img class="image-card" src="<?= $imagen["url"]; ?>" alt="">
                        </div>
                        <div class="circle-img">
                            <img src="<?php bloginfo('template_url') ?>/images/circle.svg" alt="">
                        </div>
                        <div class="col-md-7  card-info">
                            <span> <?= $informacion["antetitulo"]; ?></span>
                            <h3 class="section-subtitle"> <?= $informacion["titulo"]; ?> </h3>
                            <p> <?= $informacion["contenido"]; ?> </p>

                        </div>
                        <a class="btn-letter"
                            href="<?= $esLang ? 'https://orderlatam.com/nosotros/' : 'https://orderlatam.com/en/us/'; ?>"><?= $esLang ? "Saber más" : "Know more"; ?></a>
                        <a href="<?= $informacion["enlace_boton"]; ?>" class="square"> <i class="icon-arrowline-right">
                            </i> </a>
                    </div>


                </div>

            </div>

        </div>

    </div>
</section>


<?php
$marcas = get_field('marcas');
$imagen = $marcas['imagen'];
?>

<section id="brands">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-subtitle text-center mb-5"> <?= $marcas["titulo"]; ?></h3>

                <div class="swiper items-brands">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($imagen as $image) :

                        ?>
                        <div class="swiper-slide">

                            <div class="item img-contain">
                                <img src="<?= $image["image"]["url"]; ?>" alt="">
                            </div>

                        </div>
                        <?php
                        endforeach;
                        ?>

                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>

            </div>



        </div>

    </div>
</section>

<?php
$portafolio = get_field('portafolio');
$informacion = $portafolio['informacion'];
$slider = $portafolio['slider'];
?>
<section id="services">
    <div class="container">
        <div class="row m-left">
            <div class="col-md-12">

                <span class="section-antetitle"> <?= $informacion["antetitulo"]; ?> </span>
                <h3 class="section-subtitle"> <?= $informacion["titulo"]; ?> </h3>
                <div class="banner-arrows">
                    <button class="prev"><i class="icon-arrowline-left"></i></button>
                    <button class="next"><i class="icon-arrowline-right"></i></button>
                </div>
                <div class="swiper portfolio">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($slider as $item) :
                        ?>

                        <a href="<?= $item["enlace"]; ?>" class="swiper-slide">
                            <div class="circle">
                                <i class="icon-doble-flecha"> </i>
                            </div>
                            <div class="img-fit">
                                <img src="<?= $item["imagen"]["url"]; ?>" />
                            </div>
                            <div class="text-slide">
                                <p class="number"><?= $item["numero"]; ?></p>
                                <p> <?= $item["titulo"]; ?></p>

                            </div>

                        </a>

                        <?php
                        endforeach;
                        ?>

                    </div>


                    <!-- <div class="swiper-button-next"></div>
                         <div class="swiper-button-prev"></div> -->
                    <div class="swiper-scrollbar"></div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>

            </div>

        </div>

    </div>
</section>

<?php
$vip = get_field('vip');
$informacion = $vip['informacion'];
$lista = $vip['lista'];
?>
<section id="location">
    <div class="found-location">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-0">
                    <div class="row vip">
                        <div class="col-md-12 col-lg-7 mb-4 informacion">
                            <span class="section-antetitle"><?= $informacion["antetitulo"]; ?> </span>
                            <h3 class="section-subtitle"><?= $informacion["titulo"]; ?> </h3>
                            <a href="<?= $informacion["enlace_boton"]; ?>" class="ord-btn line-btn">
                                <?= $informacion["texto_boton"]; ?></a>
                        </div>

                        <div class="col-md-12 col-lg-5">
                            <div class="list-vip">
                                <ul>
                                    <?php
                                    foreach ($lista as $item) :
                                    ?>
                                    <li>
                                        <p><?= $item["contenido"]; ?> </p>
                                    </li>
                                    <?php
                                    endforeach;
                                    ?>
                                </ul>


                            </div>


                        </div>

                    </div>

                    <?php
                    $paises = get_field('paises');
                    $informacion = $paises['informacion'];
                    $slider_paises = $paises['slider_paises'];
                    ?>
                    <div class="row information-location">
                        <div class="col-md-5 ">
                            <span class="section-antetitle"><?= $informacion["antetitulo"]; ?></span>
                            <h3 class="section-subtitle"><?= $informacion["titulo"]; ?> </h3>
                        </div>

                        <div class="offset-lg-1 col-md-3 principal-numbers">
                            <p class="number"> <?= $informacion["numero_1"]; ?> </p>
                            <p class="text-numbers"> <?= $informacion["contenido_1"]; ?> </p>
                        </div>


                        <div class="col-md-3 principal-numbers">
                            <p class="number"> <?= $informacion["numero_2"]; ?> </p>
                            <p class="text-numbers"> <?= $informacion["contenido_2"]; ?> </p>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="swiper locations">
                                <div class="swiper-wrapper">
                                    <?php
                                    foreach ($slider_paises as $slider) :
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="item-location position-relative">
                                            <div class="circle">
                                                <i class="icon-location"> </i>
                                                <div class="location-details">
                                                    <p><?=$slider["sede"];?></p>
                                                    <a href="<?=$slider["celular"];?>"><?=$slider["celular"];?></a>
                                                    <a href="mailto:contacto@order.cl"><?=$slider["email"];?></a>
                                                </div>
                                            </div>
                                            <div class="img-fit">
                                                <img src="<?= $slider["imagen"]["url"]; ?>" alt="">
                                            </div>

                                            <a href="#" target="_blank"><?= $slider["contenido"]; ?> <i
                                                    class="icon-arrowline-right"></i></a>
                                        </div>


                                    </div>
                                    <?php
                                    endforeach;
                                    ?>


                                </div>
                                <div class="swiper-pagination"></div>
                            </div>


                            <?php
                                foreach ($slider_paises as $slider) :
                                ?>

                            <?php
                                endforeach;
                                ?>

                        </div>

                    </div>

                </div>


                <?php
                    $team = get_field('team');
                    $informacion = $team['informacion'];
                    $imagen = $team['imagen'];
                    ?>

                <div class="row team-home">
                    <div class="col-md-1 squares">
                        <div class="img-fit" data-scroll data-scroll-speed="2" data-scroll-direction="vertical">
                            <img src="https://orderlatam.com/wp-content/uploads/2022/09/cuadrados.svg" alt="">

                        </div>
                    </div>

                    <div class="col-md-7 information">
                        <span class="section-antetitle"><?= $informacion["antetitulo"]; ?></span>
                        <h3 class="section-subtitle"><?= $informacion["titulo"]; ?></h3>
                        <p><?= $informacion["contenido"]; ?></p>
                        <a href="<?= $informacion["enlace_boton"]; ?>" class="ord-btn line-btn">
                            <?= $informacion["texto_boton"]; ?></a>

                    </div>

                    <div class="col-md-4 principal">
                        <div class="img-fit img-principal" data-scroll data-scroll-speed="2"
                            data-scroll-direction="vertical">
                            <img src="https://orderlatam.com/wp-content/uploads/2022/09/order-team-home.png" alt="">

                        </div>


                    </div>
                </div>



                <?php
                    $testimonios = get_field('testimonios');
                    $informacion = $testimonios['informacion'];
                    $slider_testimonios = $testimonios['slider_testimonios'];
                    ?>
                <!-- <div class="row testimonies">
                    <div class="col-md-12">
                        <span class="section-antetitle text-center"> <?= $informacion["antetitulo"]; ?> </span>
                        <h3 class="section-subtitle text-center"> <?= $informacion["titulo"]; ?> </h3>
                    </div>
                    <div class="col-md-12">
                        <div class="swiper slider-testimonies">
                            <div class="swiper-wrapper">
                                <?php
                                    foreach ($slider_testimonios as $slider) :
                                    ?>
                                <div class="swiper-slide">
                                    <div class="testimonies-item">

                                        <div class="text">
                                            <i class="icon-comillas"> </i>
                                            <p> <?= $slider["contenido"]; ?> </p>
                                        </div>

                                        <div class="person">
                                            <div class="circle-img img-fit">
                                                <img src="<?= $slider["imagen"]["url"]; ?>" alt="">
                                            </div>

                                            <div class="information">
                                                <p class="name"> <?= $slider["nombre"]; ?> </p>
                                                <span><?= $slider["empresa"]; ?> </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php
                                    endforeach;
                                    ?>


                            </div>
                            <div class="swiper-pagination"></div>
                        </div>


                    </div>
                </div> -->

            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>