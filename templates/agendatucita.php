<?php

/** Template Name: Agendatucita*/
get_header();
$esLang = pll_current_language() == 'es';
?>
<section id='calendario'>
        <div class="container">
        <div class="calendly-inline-widget" data-url="https://calendly.com/agenda-orderlatam/agenda-tu-asesoria-con-un-consultor-experto?primary_color=6f00cc" 
        style="min-width:320px;height:830px;">
        </div>
        </div>
</section>


<?php
get_footer();
?>