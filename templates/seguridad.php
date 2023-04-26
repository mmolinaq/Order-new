<?php
get_header();
$esLang = pll_current_language() == 'es';
$banner = get_field('banner');
//  $titulo = $banner['titulo'];
$imagen = $banner['imagen'];
?>

<div class="col-md-12 col-lg-12 contenido">
            <section id="banner-ciber">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <h1 class="section-title"> <?=$post->post_title;?> </h1>
                            <di class="img-fit">
                                <img class="img-principal" src="<?=$imagen["url"];?>" alt="">
                        </div>

                    </div>

                </div>
            </section>

  <?php 
     $seccion_uno = get_field('seccion_uno');
     $informacion = $seccion_uno['informacion'];
     $imagen = $seccion_uno['imagen'];
  ?>
            
            <section id="security">
                <div class="container">
                    <div class="row m-left">
                        <div class="img-fit img-found">
                            <img src="<?php bloginfo('template_url') ?>/images/soluciones/found-section.png" alt="">
                        </div>
                        <div class="col-md-6 offset-md-1 mb-5">
                            <h3 class="section-subtitle mb-3"> <?=$informacion["titulo"];?> </h3>
                            <p><?=$informacion["contenido"];?> </p>
                            <a href="<?=$informacion["enlace_boton"];?>" target="_blank" class="ord-btn line-black"> <?=$informacion["texto_boton"];?> </a>
                        </div>

                        <div class="col-md-4 offset-md-1">
                            <div class="img-security">
                                <div class="img-fit">
                                    <img src=" <?=$imagen["url"];?>" alt="">
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </section>

 <?php 
     $seccion_dos = get_field('seccion_dos');
     $informacion = $seccion_dos['informacion'];
  ?>
            <section id="strategy" class="found-blue">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center align-items-center">
                            <div class="img-logo-cuadrado">
                                <div class="img-fit">
                                    <img src="<?php bloginfo('template_url') ?>/images/logo-cuadrado-blanco-1.png" alt="">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-9">
                            <div class="row">
                            <?php
                               foreach($informacion as $item) : 
                             ?>
                                <div class="col-md-6 item-strategy">
                                    <div class="title">
                                      <div class="img-fit">
                                          <img src="<?= $item["imagen"]["url"];?>" alt="">

                                      </div>
                                      <p class="p-20"><?=$item["titulo"];?>  </p>

                                    </div>
                                    

                                    <p> <?=$item["contenido"];?> </p>
                                </div>
                            
                                <?php
                               endforeach;
                               ?>

                                <!-- <div class="col-md-6 item-strategy">
                                    <div class="img-fit">
                                        <img src="<?php bloginfo('template_url') ?>/images/soluciones/estrategia-2.svg" alt="">

                                    </div>

                                    <p> Definimos la estrategia digital, diseñamos una hoja de ruta y luego proporcionamos la gestión del proyecto en la entrega con el liderazgo adecuado.</p>
                                </div>

                                <div class="col-md-6 item-strategy">
                                    <div class="img-fit">
                                        <img src="<?php bloginfo('template_url') ?>/images/soluciones/estrategia-3.svg" alt="">

                                    </div>

                                    <p> Definimos la estrategia digital, diseñamos una hoja de ruta y luego proporcionamos la gestión del proyecto en la entrega con el liderazgo adecuado.</p>
                                </div>

                                <div class="col-md-6 item-strategy">
                                    <div class="img-fit">
                                        <img src="<?php bloginfo('template_url') ?>/images/soluciones/estrategia-4.svg" alt="">

                                    </div>

                                    <p> Definimos la estrategia digital, diseñamos una hoja de ruta y luego proporcionamos la gestión del proyecto en la entrega con el liderazgo adecuado.</p>
                                </div> -->

                            </div>

                        </div>

                    </div>

                </div>

            </section>

 <?php 
     $seccion_tres = get_field('seccion_tres');
     $informacion = $seccion_tres['informacion'];
     $proyectos = $seccion_tres['proyectos'];

     $posts_p = (new WP_Query(array(
        "post_type" => "post",
        'posts_per_page' => 4
    )))->posts;
  ?>
            <!-- <section id="projects">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center mb-4">
                            <span class="section-antetitle">  </span>
                            <h3 class="section-subtitle"> Noticias </h3>
                        </div>
                        
                        <div class="project-container">
                         <?php
                          foreach($posts_p as $post) : 
                         ?>
                            <div class="blog-item">
                                <a href="<?= get_permalink($post) ?>"
                                    class="img-fit img-principal">
                                    <img src="<?= get_the_post_thumbnail_url($post) ?>"
                                        alt="">  
                                         <div class="img-fit img-logo">
                                            <img class="logo" src="<?= $proyecto["logo"]["url"];?>" alt="">
                                         </div> 
                                </a>
                                
                                <div class="text-news">
                                    <a
                                        href="<?= get_permalink($post) ?>">
                                        <h4> <?=$post->post_title;?> </h4>
                                        <i class="icon-arrowline-right"> </i>
                                    </a>
                                </div>
                            </div>
                          
                            <?php
                             endforeach;
                             ?>
                            <div class="blog-item">
                                <a href=""
                                    class="img-fit img-principal">
                                    <img src="<?php bloginfo('template_url') ?>/images/soluciones/img-3.jpg"
                                        alt="">
                                        <div class="img-fit img-logo">
                                            <img class="logo" src="<?php bloginfo('template_url') ?>/images/soluciones/logo-2.svg" alt="">
                                         </div>
                                </a>
                                <div class="text-news">
                                    <a
                                        href="">
                                        <h4>How Enzo launched premium banking
                                            for high earners
                                            </h4>
                                        <i class="icon-arrowline-right"> </i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-item">
                                <a href=""
                                    class="img-fit img-principal">
                                    <img src="<?php bloginfo('template_url') ?>/images/soluciones/img-4.jpg"
                                        alt="">
                                        <div class="img-fit img-logo">
                                            <img class="logo" src="<?php bloginfo('template_url') ?>/images/soluciones/logo-3.svg" alt="">
                                         </div>
                                </a>
                                <div class="text-news">
                                    <a
                                        href="">
                                        <h4>How Lance launched premium banking
                                            for high earners
                                            </h4>
                                        <i class="icon-arrowline-right"> </i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-item">
                                <a href=""
                                    class="img-fit img-principal">
                                    <img src="<?php bloginfo('template_url') ?>/images/soluciones/img-5.jpg"
                                        alt="">
                                        <div class="img-fit img-logo">
                                            <img class="logo" src="<?php bloginfo('template_url') ?>/images/soluciones/logo-4.svg" alt="">
                                         </div>
                                </a>
                                <div class="text-news">
                                    <a
                                        href="">
                                        <h4>How Bridge launched premium banking
                                            for high earners
                                            </h4>
                                        <i class="icon-arrowline-right"> </i>
                                    </a>
                                </div>
                            </div> 

                        </div>
                    </div>

                </div>
            </section> -->

<?php 
     $seccion_cuatro = get_field('seccion_cuatro');
     $posts = (new WP_Query(array(
        "post_type" => "solucione",
    )))->posts;
    
    $tam = count($posts) - 1;

    $n1 = random_int(0, $tam);
    $n2;

    do {
        $n2 = random_int(0, $tam);
    } while ($n1 == $n2);

    $imagen1 = get_field('banner', $posts[$n1])['imagen'];
    $imagen2 = get_field('banner', $posts[$n2])['imagen'];    
  ?>

         
            <section id="item-card">
                <div  class="container">
                    <div class="row">
                    <h3 class="section-subtitle text-center  mb-5"><?= $esLang ? "Más soluciones" : "More solutions" ;?></h3>
                        <a href="<?= get_permalink($posts[$n1]) ?>" class="col-md-6 mb-5">
                           <div class="img-fit">
                            <img src="<?= $imagen1['url'] ?>" alt="">
                              <h2> <?= $posts[$n1]->post_title; ?></h2>
                              <i class="icon-arrowlongline-left"></i>
                           </div>
                        </a>

                        <a href="<?= get_permalink($posts[$n2]) ?>" class="col-md-6 mb-5">
                            <div class="img-fit">
                             <img src="<?= $imagen2['url'] ?>" alt="">
                               <h2> <?= $posts[$n2]->post_title; ?> </h2>
                               <i class="icon-arrowlongline-right"></i>
                            </div>
                         </a>


                    </div>

                </div>
            </section>

            
</div>

<?php
get_footer();
?>