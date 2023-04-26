<?php 

function render_breadcrumbs()
{
  $esLang = pll_current_language() == 'es';
?>

<ul class="breadcrumbs">
  <li><a href="<?= get_home_url() ?>"><?= $esLang ? 'Inicio' : 'Home' ?></a></li>
  <?php
    $singlePost  = is_single() && 'post' == get_post_type();
    $categoryPost = is_category() && 'post' == get_post_type();
    if ($singlePost ||  $categoryPost) {
    ?>
  <li><a href="<?= get_permalink(pll_get_post(409)); ?>">Blog</a></li>
  <?php } ?>
  <?php if($categoryPost){ ?>
  <li><a href="#"><?php single_cat_title() ?></a></li>
  <?php } ?>
  <?php if($singlePost){ ?>
  <li class="post-name"><a><?= single_post_title(); ?></a></li>
  <?php } ?>

</ul>

<?php
}

function render_post_item($post)
{
?>

<div class="col-md-6">
  <div class="new-item">
    <div class="img-fit">
     <a href="<?= get_permalink($post) ?>" class="img-fit">
      <img src="<?= get_the_post_thumbnail_url() ?>" alt="">
     </a>
     <div class="new-info">
      <span><?= get_the_date("d / M / Y", $post) ?></span>
      <?php
       $cats = get_the_category($post);
      foreach ($cats as $cat) : ?>
      <a class="blog-cat-ref" href="<?= get_category_link($cat) ?>"
        data-catid="<?= $cat->term_id ?>"><?= $cat->name ?></a></h4>
      <?php endforeach; ?>
     </div>
    </div>
   
    <a href="<?= get_permalink($post) ?>" class="link">
      <p><?= $post->post_title; ?></p>
      <p class="text"><?=$post->post_excerpt;?> </p>
      <div class="d-flex align-items-center">
         <span>Leer artículo   </span>  
       <i class="icon-arrowline-right"> </i> 
      </div>
      
    </a>
  </div>
</div>

<?php } 