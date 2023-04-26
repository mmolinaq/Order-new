<?php

/** Template Name: Contacto*/
get_header();
$esLang = pll_current_language() == 'es';
?>

<section id="form">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <span class="section-antetitle"> <?=$esLang ? "Envianos un mensaje y te haremos llegar nuestras ideas" : "Send us a message and we will send you our ideas";?> </span>
                <h3 class="section-title mb-5"> <?=$esLang ? "Es momento de dar un gran salto" : "It's time to take a big leap";?> </h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form_field">
                            <label for=""><?=$esLang ? "Nombre completo" : "Full name"; ?></label>
                            <input id="txtName" type="text" placeholder=" <?=$esLang ? 'Escribe tu nombre' : 'Write your name';?>">
                        </div> 
                    </div>

                    <div class="col-md-12">
                        <div class="form_field">
                            <label for=""><?=$esLang ? "Correo electrónico" : "Email" ;?></label>
                            <input id="txtEmail" type="text" placeholder="<?=$esLang ? 'Escribe tu correo electrónico' : 'Write your email';?>">
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form_field">
                            <label for=""><?=$esLang ? "Nombre de tu empresa" : "Name of your company" ;?></label>
                            <input id="txtBussines" type="text" placeholder="<?=$esLang ? 'Escribe el nombre de tu empresa' : 'Write the name of your company';?>">
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form_field">
                            <label for=""><?=$esLang ? "Web de tu empresa" : "Your company website" ;?></label>
                            <input id="txtWeb" type="text" placeholder="<?=$esLang ? 'Escribe el link del sitio web' : 'Write the website link';?>">
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form_field">
                            <label for=""><?=$esLang ? "Describe brevemente lo que tienes en mente" : "Briefly describe what you have in mind" ;?></label>
                            <textarea name="" id="txtDescription" cols="30"
                                rows="4" placeholder="<?=$esLang ? "Escribe que quieres innovar en tu compañia" : "Write what you want to innovate in your company" ;?>"></textarea>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <a class="ord-btn line-black" style="cursor: pointer" id="send-btn"> <?=$esLang ? "Enviar mensaje" : "Send message";?></a>
                    </div>

                    <div class="checkoutSuccessMessage alert alert-success d-none">OK</div>
                    <div class="checkoutErrorMessage alert alert-danger d-none">OK</div>

                </div>
            </div>

            <div class="offset-md-1 col-md-5">
                <div class="img-fit img-contact">
                    <img src="https://intuitionagencia.com/order/wp-content/uploads/2022/08/img-1.jpg" alt="">

                </div>

            </div>

        </div>

    </div>

</section>

<?php 
     $paises = get_field('paises', 8);
     $informacion = $paises['informacion'];
     $slider_paises = $paises['slider_paises'];
?>

<section class="location-contact">
    <div class="container">
        <div class="row">
            <h3 class="section-subtitle"> <?=$esLang ? "Encuentranos tambien" : "Find us too" ;?></h3>
            <div class="swiper locations">
            <div class="swiper-wrapper">
                                    <?php
                               foreach($slider_paises as $slider) : 
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
                                                <img src="<?= $slider["imagen"]["url"];?>" alt="">
                                            </div>
                                            <!-- <div class="location-info">

                                    </div> -->
                                            <a href="#" target="_blank"><?= $slider["contenido"]; ?> <i
                                                    class="icon-arrowline-right"></i></a>
                                        </div>


                                    </div>
                                    <?php
                               endforeach;
                                ?>
                                    <!-- <div class="swiper-slide">Slide 2</div>
                             <div class="swiper-slide">Slide 3</div> -->

                                </div>

            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>