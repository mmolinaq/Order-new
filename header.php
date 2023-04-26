<!DOCTYPE html>
<html lang="es">
<?php
$esLang = pll_current_language() == 'es';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('-', true, 'right'); ?> Order</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php bloginfo('template_url') ?>/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url') ?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url') ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url') ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url') ?>/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_url') ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/custom.min.css">

    <script>
        var ajaxUrl = "<?= admin_url("admin-ajax.php") ?>";
    </script>
    <?php wp_head() ?>
</head>

<body>

    <?php
    $langs = pll_the_languages(array(
        "raw" => 1
    ));
    ?>

    <div id="wrapper" data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
        <header data-scroll data-scroll-sticky data-scroll-target="#wrapper" class=" <?= is_front_page() ? 'home-header' : '' ?>">
            <nav id="navbar-scroll">
                <div class="navbar">
                    <a style="z-index:100" class="logo-contenedor" href="<?= $esLang ? get_home_url() : 'https://orderlatam.com/en/home/' ?>"> <img class="logo" src="<?= is_front_page() ? 'https://orderlatam.com/wp-content/uploads/2022/11/order.gif' : 'https://intuitionagencia.com/order/wp-content/uploads/2022/11/order-paginas.gif'; ?>" alt=""></a>
                    <div class="contact-menu d-flex align-items-center">
                    <a  class="btn d-none d-lg-flex" href="https://agenda-tu-cita.orderlatam.com/" target="_blank"> <?= $esLang ? "Agenda una cita" : "Make a date" ?></a>
                        <div class="social-media">
                            <p><?= $esLang ? "Síguenos" : "Follow us"; ?></p>
                            <hr>
                            <div class="icons-media">
                                <a href="https://www.linkedin.com/company/order-latam/" target="_blank">
                                    <i class="icon-linkedin"></i>

                                </a>
                                <!-- <a href="#" target="_blank">
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="icon-facebook"></i>
                                </a> -->
                            </div>

                        </div>
                    </div>
                </div>

            </nav>
            <div class="menu-principal">
                <div class="menu-container">
                    <div class="logo">
                        <img src="<?php bloginfo('template_url') ?>/images/logo-color.svg" alt="">
                    </div>
                    <div class="circle-purple"> <img src="<?php bloginfo('template_url') ?>/images/circle-purple.svg" alt=""> </div>
                    <div class="principal-links">
                        <div class="col-md-6 links-order">
                            <a href="<?= $esLang ? get_home_url() : 'https://orderlatam.com/en/home/' ?>"><?= $esLang ? "Inicio" : "Home"; ?></a>
                            <a href="<?= $esLang ? get_permalink(633) : 'https://orderlatam.com/en/us/' ?>" <?= is_page(208) ? 'class="active"' : '' ?>><?= $esLang ? "Nosotros" : "Us"; ?></a>
                            <div class="link-submenu">
                                <a href="<?= $esLang ? get_permalink(663) : 'https://orderlatam.com/en/solutions/' ?>" <?= is_page(221) ? 'class="active"' : '' ?>><?= $esLang ? "Soluciones" : "Solutions"; ?></a>
                                <div class="submenu">
                                    <a href="<?= $esLang ? get_permalink(296) : 'https://orderlatam.com/en/solucione/it-infrastructure/'; ?>" <?= is_page(296) ? 'class="active"' : '' ?>><?= $esLang ? "Infraestructura TI" : "IT infrastructure"; ?></a>
                                    <a href="<?= $esLang ? get_permalink(295) : 'https://orderlatam.com/en/solucione/cybersecurity/'; ?>" <?= is_page(295) ? 'class="active"' : '' ?>><?= $esLang ? "Ciberseguridad" : "Cybersecurity"; ?></a>
                                    <a href="<?= $esLang ? get_permalink(297) : 'https://orderlatam.com/en/solucione/cloud-services/'; ?>" <?= is_page(297) ? 'class="active"' : '' ?>><?= $esLang ? "Servicios cloud" : "Cloud services"; ?></a>
                                    <a href="<?= $esLang ? get_permalink(298) : 'https://orderlatam.com/en/solucione/service-center/'; ?>" <?= is_page(298) ? 'class="active"' : '' ?>><?= $esLang ? "Centro de servicio" : "Service center"; ?></a>
                                    <a href="<?= $esLang ? get_permalink(299) : 'https://orderlatam.com/en/solucione/consultancy/'; ?>" <?= is_page(299) ? 'class="active"' : '' ?>><?= $esLang ? "Consultoria" : "Consultancy"; ?></a>
                                    <a href="<?= $esLang ? get_permalink(300) : 'https://orderlatam.com/en/solucione/digital-automation/'; ?>" <?= is_page(300) ? 'class="active"' : '' ?>><?= $esLang ? "Automatización digital" : "Digital Automation"; ?></a>
                                </div>
                            </div>

                            <div class="link-submenu">
                            <a><?= $esLang ? "Comunidad" : "Comunidad"; ?></a>
                                <div class="submenu">
                                    <a href="<?= $esLang ? get_permalink(409) : 'https://orderlatam.com/en/blog-2/'; ?>"><?= $esLang ? "Blog" : "Blog"; ?> </a>
                                    
                                </div>
                            </div>


                            <!--<a href="<?= $esLang ? get_permalink(409) : 'https://intuitionagencia.com/order/en/news/'; ?>"><?= $esLang ? "Noticias" : "News"; ?></a>-->

                            <a class="contact" href="<?= $esLang ? get_permalink(651) : 'https://orderlatam.com/en/contact/'; ?>" <?= is_page(332) ? 'class="active"' : '' ?>><?= $esLang ? "Contacto" : "Contact"; ?>
                                <div class="img-purple"> <img src="<?php bloginfo('template_url') ?>/images/cuadrado-purple.svg" alt=""> </div>
                            </a>

                            <a  class="btn d-flex d-lg-none" href="https://agenda-tu-cita.orderlatam.com/" target="_blank">Agenda una cita</a>

                        </div>

                        <div class="col redes position-relative">

                            <div class="img-contain logo-menu">
                                <img src="https://orderlatam.com/wp-content/uploads/2022/11/order-icon-img.jpg" alt="">
                            </div>

                            <h3 class="title-social-media"> Siguenos aquí</h3>
                            <div class="social-media">
                                <!-- <a href=""><i class="icon-twitter"> </i> </a>
                                <a href=""><i class="icon-facebook"> </i> </a> -->
                                <a href="https://www.linkedin.com/company/order-latam/"><i class="icon-linkedin"> </i> </a>
                            </div>
                        </div>

                    </div>


                </div>

                <button class="menu-btn"></button>

                <div class="language">
                    <?php foreach ($langs as $lng) : ?>
                        <a href="<?= $lng["url"] ?>" <?= $lng["current_lang"] == "1" ? "class='active'" : ""  ?>><?= $lng["slug"] == 'es' ? 'ES' : 'EN'; ?> </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </header>

        <main data-scroll-container class=" <?= is_front_page() ? 'main-home page-wrapper' : 'page-wrapper' ?>">