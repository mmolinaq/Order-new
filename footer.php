<?php
$esLang = pll_current_language() == 'es';
?>

    <footer class=" <?= is_front_page() ? 'home-footer' : '' ?>">
        <div class="container">
            <div class="circle-blue"> </div>
            <div class="row">
                <div class="d-flex footer-text">
                    <div class="col-md-8 mb-5">
                        <h2 class="section-title"><?= $esLang ? "¿Estás listo para <br>
                          hacer <span>un cambio?</span>" : "Are you ready for <br> make <span> a change?</span>";?> </h2>
                          <a href="https://orderlatam.com/contacto/" class="ord-btn line-black"><?=$esLang ? "Contáctanos" : "Contact us";?></a>
      
                          <div>
                              <form class="email">
                                  <p class="p-20"> <?= $esLang ? "Enviaremos nuestras ideas a tu email" : "We will send our ideas to your emai";?></p>
                                  <div class="user-email">
                                    <input type="email" id="email" pattern="" size="30" required=""  placeholder="<?=$esLang ? 'Correo eléctronico' : 'Email';?>">
                                    <button class=""> <i class="icon-arrowlongline-right"> </i> </button>
                                  </div>
                                 
                               </form>
                          </div>
                      </div>
      
                      <div class="col-md-4 footer-contact">
                        <!-- <div class="img-fit logo-footer">
                           <img src="<?php bloginfo('template_url') ?>/images/logo-footer.svg" alt="">
                        </div> -->
                          <a href=""> <img class="logo" src="https://orderlatam.com/wp-content/uploads/2022/11/order-2-1.gif" alt=""></a> 
      
                          <div class="text-contact">
                              <ul>
                                  <li>Los Militares 5885, Región
                                      Metropolitana, Chile</li>
                                  <li> <a href="mailto:contacto@order.cl">contacto@order.cl</a> </li>
                                  <li> <a href="tel:56 22 3889600">+56 22 3889600</a> </li>
                              </ul>
                          </div>
      
                          <div class="footer-icons">
                              <!-- <a href="#" target="_blank">
                                  <i class="icon-twitter"></i>
                              </a>
                              <a href="#" target="_blank">
                                  <i class="icon-facebook"></i> -->
                                 
                              </a>
                              <a href="https://www.linkedin.com/company/order-latam/" target="_blank">
                                  <i class="icon-linkedin"></i>
                              </a>
                              
                          
                           </div>
                      </div>
                </div>
            
                <div class="col-md-12">
                    <div class="copy">
        
                        <span> ©2022 Order Tech All Rights Reserved</span>
                          
                        <div class="link">
                          <a href="<?= $esLang ? get_home_url() : 'https://orderlatam.com/en/home/' ;?>"><?=$esLang ? "Inicio" : "Home" ;?></a>
                          <a href="<?= $esLang ? get_permalink(633) : 'https://orderlatam.com/en/us/' ?>"><?=$esLang ? "Nosotros" : "Us" ;?></a>
                          <a href="<?= $esLang ? get_permalink(663) : 'https://orderlatam.com/en/solutions/' ?>"><?=$esLang ? "Soluciones" : "Solutions" ;?></a>
                          <!--<a href="<?= $esLang ? get_permalink(409) : 'https://orderlatam.com/en/news/' ;?>"><?=$esLang ? "Noticias" : "News";?></a>-->
                          <a href="<?= $esLang ? get_permalink(651) : 'https://orderlatam.com/en/contact/' ;?>"><?=$esLang ? "Contacto" : "Contact" ;?></a> 

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </footer>
    </main>

    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/locomotive-scroll.min.js"></script>

<script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"> </script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<?php if(is_page(803)) { ?>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<?php }?>
<script src="<?php bloginfo('template_url') ?>/assets/js/custom.js"> </script>

<?php wp_footer() ?>
</html>