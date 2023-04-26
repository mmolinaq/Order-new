<?php
/**
 * Template Name: News
 */

get_header();
$esLang = pll_current_language() == 'es';

?>

<section class="news-feed">
    <div class="container-fluid">
        <div class="row">
            <?php $posts = (new WP_Query(array(
                "post_type" => "post",
                'posts_per_page' => 1,
            )))->posts; ?>
        </div>

        <div class="col-md-12">
            <div class="main-post">
            
                <div class="post-content">

                    <div class="img-fit">
                        <img src="https://orderlatam.com/wp-content/uploads/2023/03/banner_order_blog_1.jpg" alt="">
                    </div>
                </div>
                    
                   <img class="img-man" src="https://orderlatam.com/wp-content/uploads/2023/03/man_blog_order-min.png" alt="">

                    <div class="col-md-12 col-lg-5 offset-lg-7">
                      <div class="new-info-banner">
                          <h1 class="section-title"><a href="">BLOG</a></h1>
                          <P> Actualidad, visión y perspectiva para manternos conectados en el mundo TI.</P>
                       </div>
                    </div>

                
            </div>
            <!-- <?php foreach ($posts as $post) : ?>
                    <div class="main-post">
                        <div class="new-info">
                            <span><?= get_the_date("d / M / Y", $post) ?></span>
                            <?php
                            $cats = get_the_category($post);
                            foreach ($cats as $cat) : ?>
                                <a class="blog-cat-ref" href="<?= get_category_link($cat) ?>" data-catid="<?= $cat->term_id ?>"><?= $cat->name ?></a></h4>
                            <?php endforeach; ?>
                        </div>
                        <h1 class="section-title"><a href="<?= get_permalink($post) ?>"><?= $post->post_title; ?></a></h1>
                        <div class="post-content">

                            <a href="<?= get_permalink($post) ?>" class="img-fit">
                                <img src="<?= get_the_post_thumbnail_url() ?>" alt="">
                            </a>
                        </div>
                    </div>

                <?php endforeach; ?> -->

            <!-- <h6 class="more-news">Más noticias</h6> -->
        </div>

    </div>
    <div class="container">
        <div class="row">

            <?php $posts = (new WP_Query(array(
                "post_type" => "post",
                'posts_per_page' => 9,
                // 'offset' => 1,
            )))->posts; ?>
            <?php foreach ($posts as $post) : ?>
            <?php render_post_item($post); ?>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php
get_footer();
?>