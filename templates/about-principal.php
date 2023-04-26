<?php

/** Template Name: */
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
                <span class="section-antetitle"> <?=$informacion["antetitulo"];?> </span>
                <h3 class="section-subtitle"> <?=$informacion["titulo"];?> </h3>
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
                                <!-- <img src="<?php bloginfo('template_url') ?>/images/Nosotros/nosotros-circle.png" alt=""> -->
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
     $seccion_tres = get_field('seccion_tres');
     $ventajas_uno = $seccion_tres['ventajas_uno'];
     $titulo = $seccion_tres['titulo'];
     $ventajas_dos = $seccion_tres['ventajas_dos'];
    
?>

<section id="advantages">
    <div class="container">
        <div class="row">
            <div class="advantages-section row">
                <?php
               foreach($ventajas_uno as $ventaja) :
             ?>

                <div class="col-md-4 advantages-item">
                    <div class="img-fit">
                        <img src="<?=$ventaja["icono_uno"]["url"];?>" alt="">
                    </div>
                    <p class="p-20"> <?=$ventaja["titulo"];?></p>
                    <p> <?=$ventaja["contenido"];?> </p>

                </div>
                <?php
              endforeach;
             ?>
                <!-- <div class="col-md-4 advantages-item">
                    <div class="img-fit">
                        <img src="https://intuitionagencia.com/order/wp-content/uploads/2022/09/Recurso-3-8.png"
                            alt="">
                    </div>
                    <p class="p-20"> Orientados al resultado </p>
                    <p> Fluidez en propuesta, estrategia, operación, gestión, medición, reporting y procesos internos </p>

                </div>
                <div class="col-md-4 advantages-item">
                    <div class="img-fit">
                        <img src="https://intuitionagencia.com/order/wp-content/uploads/2022/09/Recurso-4-8.png"
                            alt="">
                    </div>
                    <p class="p-20"> Confiables </p>
                    <p> Contacto directo, frecuente y personalizado con líderes y socios través de medios presenciales y virtuales</p>

                </div> -->
            </div>
            <div class="col-md-12 d-flex justify-content-between align-items-center mb-5 mt-5">
                <div class="img-fit arrow">
                    <img src="https://intuitionagencia.com/order/wp-content/uploads/2022/09/Recurso-9-8.png" alt="">
                </div>
                <h3 class="section-title text-center"> <?=$seccion_tres["titulo"];?> </h3>
                <div class="img-fit arrow">
                    <img src="https://intuitionagencia.com/order/wp-content/uploads/2022/09/Recurso-8-8.png" alt="">
                </div>
            </div>

            <div class="advantages-section row">
                <?php
               foreach($ventajas_dos as $ventaja) :
             ?>
                <div class="col-md-4 advantages-item">
                    <div class="img-fit">
                        <img src="<?=$ventaja["icono_dos"]["url"];?>" alt="">
                    </div>
                    <p class="p-20"> <?=$ventaja["titulo"];?> </p>
                    <p> <?=$ventaja["contenido"];?> </p>

                </div>

                <?php
              endforeach;
             ?>
                <!-- <div class="col-md-4 advantages-item">
                    <div class="img-fit">
                        <img src="https://intuitionagencia.com/order/wp-content/uploads/2022/09/Recurso-6-8.png"
                            alt="">
                    </div>
                    <p class="p-20"> Proximidad</p>
                    <p> Asumimos el rol de socios de negocio más que de proveedor entregando toda nuestra
                        experiencia TI de más de 20 años </p>

                </div>
                <div class="col-md-4 advantages-item">
                    <div class="img-fit">
                        <img src="https://intuitionagencia.com/order/wp-content/uploads/2022/09/Recurso-7-8.png"
                            alt="">
                    </div>
                    <p class="p-20"> Ágiles </p>
                    <p> Usamos metodologías ágiles, marcos de trabajo, tableros y KPIs para una correcta trazabilidad y analítica del proyecto </p>

                </div> -->
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
get_footer();
?>