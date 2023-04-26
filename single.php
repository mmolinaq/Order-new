<?php
get_header();
$esLang = pll_current_language() == 'es';
$terms = get_the_terms($post->ID, 'category');
?>

<section class="post pt-0">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
        <?php render_breadcrumbs() ?>
    </div>
            
                
                <div class="img-fit main-post-img">
                    <img src="<?= get_the_post_thumbnail_url() ?>" alt="">
                </div>
                <h1 class="section-title mb-5 text-center"><?php the_title() ?></h1>
            </div>
            <div class="col-md-10 offset-md-1 mb-5">
                <?php the_content() ?>
            </div>
            <?php
            $current_post_id = get_the_ID(); //Obtiene el ID del post actual
            $categories = wp_get_post_categories($current_post_id); //Obtiene las categorías del post actual
            if ($categories) {
                $category_ids = array(); //Crea un array para guardar los IDs de las categorías
                foreach($categories as $category) {
                    $category_ids[] = $category;
                }
                $args = array(
                    'category__in' => $category_ids, //Obtiene las publicaciones que pertenecen a una de las categorías del post actual
                    'post__not_in' => array($current_post_id), //Excluye el post actual de la lista
                    'posts_per_page' => 5, //Limita la lista a 5 publicaciones
                    'orderby' => 'rand' //Orden aleatorio
                );
                $related_posts = get_posts($args); //Recupera los posts relacionados

                if($related_posts){
            ?>
            
            <div class="col-md-12">
                <h5 class="section-title mb-4"><?=$esLang ? "Te puede interesar" : "You may be interested in" ;?></h5>
            </div>

            <?php
                    }
                }
                if ($related_posts){
                    foreach ($related_posts as $post) : setup_postdata($post); 
                // foreach($posts as $post):
            
                    render_post_item($post);
                endforeach;
                }
                
         ?>
        </div>
</section>

<?php
get_footer();
?>