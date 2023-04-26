<?php

get_header();


$esLang = pll_current_language() == 'es';

?>

<section class="pt-0 cat-feed">
  <div class="container">
    
    <div class="row">
    <div class="col-md-12">
     <?php render_breadcrumbs() ?>
        <h1 class="section-title "><?= single_cat_title() ?></h1>
     </div>
      <?php
      foreach ($posts as $post) :?> 
        <?php  render_post_item($post); ?>
      <?php  endforeach;

      ?>
    </div>
    
  </div>
</section>



<?php get_footer(); ?>