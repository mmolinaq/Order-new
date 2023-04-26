<?php

/** Template Name: Nosotros*/
get_header();
?>

<?php 
     $banner = get_field('banner');
     $imagen = $banner['imagen'];
     $titulo = $banner['titulo'];
?>

<section id="banner-about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 title">
                <h1 class="section-title"> <?=$banner["titulo"];?> </h1>
            </div>

            <div class="col-md-8 p-0">
                <div class="img-fit">
                    <img src="<?=$imagen["url"];?>" alt="">
                </div>

            </div>

        </div>

    </div>

</section>

<?php 
     $seccion_uno = get_field('seccion_uno');
     $informacion = $seccion_uno['informacion'];
     $lista = $informacion['lista'];
     $imagen = $seccion_uno['imagen'];
    
?>
<section id="proposal">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- <span class="section-antetitle"> <?=$informacion["antetitulo"];?> </span>
                <h3 class="section-subtitle"> <?=$informacion["titulo"];?> </h3> -->
                <p> <?=$informacion["contenido"];?> </p>
                <div class="list-proposal">

                    <ul>
                        <?php
                          foreach($lista as $item) : 
                        ?>
                        <li>
                            <p> <?=$item["contenido"];?> </p>
                        </li>
                        <?php
                        endforeach;
                        ?>
                    </ul>

                </div>

            </div>

            <div class="col-md-4">
                <div class="img-fit img-proposal" data-scroll data-scroll-speed="3">
                    <img src="<?=$imagen["url"];?>" alt="">
                </div>

            </div>

        </div>


    </div>

</section>

<?php 
     $seccion_cinco = get_field('seccion_cinco');
     $antetitulo = $seccion_cinco['antetitulo'];
     $titulo = $informacion['titulo'];
     $lista = $seccion_cinco['lista'];
    
?>

<section id="environments">
    <div class="container">
        <div class="row">
            <div class="col-md-2 environments-color">

            </div>

            <div class="col-md-10 environments-info">
                <span class="section-antetitle"> <?=$seccion_cinco["antetitulo"];?> </span>
                <h3 class="section-title"> <?=$seccion_cinco["titulo"];?> </h3>
                <div class="list-proposal">

                    <ul>
                        <?php
                          foreach($lista as $item) : 
                        ?>

                        <li>
                            <p> <?=$item["contenido"];?> </p>
                        </li>

                        <?php
                          endforeach;
                          ?>

                        <!-- <li>
                            <p> Soluciones de seguridad perimetral </p>
                        </li>
                        <li>
                            <p> Gestión de mesas de servicios y soporte a usuarios </p>
                        </li>
                        <li>
                            <p> Gestión de almacenamiento </p>
                        </li>
                        <li>
                            <p> Seguridad corporativa </p>
                        </li>
                        <li>
                            <p> Consultoría IT </p>
                        </li>
                        <li>
                            <p> Administración de infraestructura IT (en base a ITIL) </p>
                        </li>
                        <li>
                            <p> Soluciones de comunicación y redes </p>
                        </li>
                        <li>
                            <p> Desarrollo de soluciones a medida </p>
                        </li> -->
                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>


<?php 
     $seccion_tres = get_field('seccion_tres');
    //  $imagen = $seccion_tres['imagen'];
     $video = $seccion_tres['video'];
     $ventajas_uno = $seccion_tres['ventajas_uno'];
     $titulo = $seccion_tres['titulo'];
    
?>

<section id="advantages">
    <video class="img-fit img-principal" width="100%" height="100%" poster="" autoplay="" muted="" loop="true"
        id="video" preload="true">
        <source src="<?= $video["url"];?>" type="video/mp4">
        <source src="<?= $video["url"];?>" type="video/ogv">
        <source src="<?= $video["url"];?>" type="video/webm">
    </video>
    <!-- <div class="img-fit ">
        <img src="<?=$imagen["url"];?>" alt="">
    </div> -->
    <div class="container">
        <div class="row">
            <div class="advantages-section row">

                <?php
                   foreach($ventajas_uno as $ventaja) : 
                 ?>
                <div class="col-md-6 col-lg-4 advantages-item">
                    <div class="img-fit">
                        <img src="<?= $ventaja["icono_uno"]["url"];?>" alt="">
                    </div>

                    <p> <?=$ventaja["contenido"];?> </p>

                </div>

                <?php
                 endforeach;
                 ?>

                <!-- 
                <div class="col-md-6 col-lg-4 advantages-item">
                    <div class="img-fit">
                        <img src="https://intuitionagencia.com/order/wp-content/uploads/2022/09/Recurso-3-8.png" alt="">
                    </div>

                    <p> Estamos comprometidos a proporcionar los más altos niveles de calidad para nuestrosproductos y
                        servicios. Mantenemos una constante actualización de nuestras soluciones, adaptándolas a las
                        necesidades reales de nuestros clientes. Atendemos las solicitudes de nuestros clientes y
                        asociados de negocios con gran velocidad, haciendo de Order una compañía ágil y con gran
                        capacidad de adaptación. </p>

                </div>

                <div class="col-md-6 col-lg-4 advantages-item">
                    <div class="img-fit">
                        <img src="https://intuitionagencia.com/order/wp-content/uploads/2022/09/Recurso-4-8.png" alt="">
                    </div>

                    <p> Incentiva y apoya la comunicación estrecha entre clientes y nuestros equipos de trabajo por su
                        importante papel en el establecimiento de las necesidades reales. Esto nos permite conocer a
                        fondo las necesidades de cada organización, orientando las soluciones para una adecuada
                        utilización y explotación, aprovechando al máximo la inversión realizada. </p>

                </div> -->

            </div>
            <!-- <div class="col-md-12 d-flex justify-content-center align-items-center mt-5">
                <h3 class="section-title text-center"> <i class="icon-inicio-comillas"> </i> <?=$seccion_tres["titulo"];?>  <i class="icon-final-comillas"> </i> </h3>
            </div> -->


        </div>

    </div>

</section>

<section id="sentence">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center align-items-center mt-5">
                <h3 class="section-title text-center"> <i class="icon-inicio-comillas"> </i>
                    <?=$seccion_tres["titulo"];?> <i class="icon-final-comillas"> </i> </h3>
            </div>

        </div>

    </div>

</section>

<?php 
     $seccion_seis = get_field('seccion_seis');
     $tab_1 = $seccion_seis['tab_1'];
    //  echo "<pre>";
    // print_r($tab_1);
    // echo "</pre>";
     $tab_2 = $seccion_seis['tab_2'];
     $tab_3 = $seccion_seis['tab_3'];
    
?>
<section id="company-tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                            aria-selected="true"><?=$tab_1["titulo"];?></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                            aria-selected="false"><?=$tab_2["titulo"];?></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane"
                            aria-selected="false"><?=$tab_3["titulo"];?></button>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="img-fit img-principal">
                                    <img src="<?= $tab_1["imagen_1"]["url"];?>" alt="">
                                </div>
                            </div>

                            <div class="col-md-7 offset-md-1 informacion">
                                <div class="img-fit logo">
                                    <img src="<?= $tab_1["icono_1"]["url"];?>" alt="">
                                </div>
                                <p class="section-subtitle"> <?=$tab_1["titulo"];?> </p>
                                <p> <?=$tab_1["contenido"];?></p>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="img-fit img-principal">
                                    <img src="<?= $tab_2["imagen_2"]["url"];?>" alt="">
                                </div>
                            </div>

                            <div class="col-md-7 offset-md-1 informacion">
                                <div class="img-fit logo">
                                    <img src="<?= $tab_2["icono_2"]["url"];?>" alt="">
                                </div>
                                <p class="section-subtitle"> <?=$tab_2["titulo"];?> </p>
                                <p> <?=$tab_2["contenido"];?> </p>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="img-fit img-principal">
                                    <img src="<?= $tab_3["imagen_3"]["url"];?>" alt="">
                                </div>
                            </div>

                            <div class="col-md-7 offset-md-1 informacion">
                                <div class="img-fit logo">
                                    <img src="<?= $tab_3["icono_3"]["url"];?>" alt="">
                                </div>
                                <p class="section-subtitle"> <?=$tab_3["titulo"];?></p>
                                <p> <?=$tab_3["contenido"];?> </p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<?php 
     $seccion_siete = get_field('seccion_siete');
     $informacion = $seccion_siete['informacion'];
     $imagen = $seccion_siete['image'];
     
?>

<section id="alliance">
    <div class="container">
        <div class="row m-left">

            <div class="col-md-6  mb-5">
                <h3 class="section-subtitle mb-3"> <?=$informacion["titulo"];?></h3>
                <p> <?=$informacion["contenido"];?> </p>

            </div>

            <div class="col-md-4 offset-md-1">
                <div class="img-security">
                    <div class="img-fit">
                        <img src="<?=$imagen["url"];?>" alt="">
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<?php 
     $seccion_cuatro = get_field('seccion_cuatro');
     $informacion = $seccion_cuatro['informacion'];
     $slider = $seccion_cuatro['slider'];
    
?>

<section id="relations">
    <div class="container">
        <div id="relations-row" class="row position-relative">

            <div class="col-md-12 img-relations" data-scroll data-scroll-sticky data-scroll-target="#relations-row">
                <div class="img-fit">
                    <img src="<?= $informacion["imagen"]["url"];?>" alt="">

                </div>

                <h3 class="section-subtitle title-relations"> <?=$informacion["titulo_uno"];?> </h3>

                <h3 class="section-subtitle title-card"> <?=$informacion["titulo_dos"];?> </h3>
            </div>



            <div class="col-md-5 offset-md-7 items-relations">

                <div class="list-relations">
                    <?php
                    foreach($slider as $item) : 
                    ?>
                    <div class="card">
                        <h4 class="number"> <?=$item["numero"];?> </h4>
                        <p> <?=$item["contenido"];?> </p>
                    </div>
                    <?php
                    endforeach;
                    ?>
                </div>

            </div>

        </div>

    </div>

</section>


<?php 
     $seccion_dos = get_field('seccion_dos');
     $antetitulo = $seccion_dos['antetitulo'];
     $titulo = $informacion['titulo'];
     $personas = $seccion_dos['personas'];
    
?>

<!-- <section id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12 position-relative">
                <div class="title-team">
                    <span class="section-antetitle"> <?=$seccion_dos["antetitulo"];?> </span>
                    <h3 class="section-subtitle"> <?=$seccion_dos["titulo"];?> </h3>
                </div>

                <div class="row staff">
                    <?php
                   foreach($personas as $persona) : 
                 ?>
                    <div class="col-md-6 col-lg-3 item-staff">
                        <div class="img-banner">
                            <div class="img-fit">
                                <img src="<?= $persona["imagen"]["url"];?>" alt="">
                            </div>
                        </div>

                        <h3 class="p-20"> <?=$persona["nombre"];?> </h3>
                        <p> <?=$persona["cargo"];?> </p>

                    </div>
                    <?php
                  endforeach;
                 ?>

                </div>


            </div>

        </div>
    </div>

</section> -->


<?php
get_footer();
?>