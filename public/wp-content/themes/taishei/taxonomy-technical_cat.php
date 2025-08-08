<?php get_header(); ?>

<div class="contents contents--technical">

    <div class="main">

<?php if (have_posts()) :?>

    <?php
    $cat1 = get_current_term();
    $now_cat1_slug = $cat1->slug;
    $now_cat1_name = $cat1->name;
    $now_cat1_id = $cat1->term_id;
    ?>

        <div class="main-keyvisual main-keyvisual--technical">
            <div class="main-keyvisual__inner">
                <h2 class="main-keyvisual__title">
                    <span class="main-keyvisual__title-jp"><?php echo $now_cat1_name;?></span>
                    <span class="main-keyvisual__title-en">Technical information</span>
                </h2>
            </div>
        </div>
        <!-- [/main-keyvisual] -->

        <div class="breadcrumb breadcrumb--border">
            <div class="container">
                <ul class="breadcrumb__list">
<?php if(function_exists('bcn_display'))
{
    bcn_display();
}
?>
                </ul>
            </div>
        </div>
        <!-- [/breadcrumb] -->

        <div class="container">

            <p class="mod-caption js-fadein">
                <?php echo $now_cat1_name;?>関連の製品や工法などをご紹介します。
            </p>
            <!-- [/mod-caption] -->

            <div class="three-contens">

                <ul class="three-contens__list">

<?php while ( have_posts() ) : the_post(); ?>

<?php
$terms = get_the_terms($post->ID, 'technical_cat');
$technical_post_product = get_field('technical_post_product');
$technical_post_method = get_field('technical_post_method');
$technical_post_eyecatching = get_field('technical_post_eyecatching');
?>

                    <li class="three-contens__list-item js-fadein">

                        <div class="technical-content">
                            <p class="technical-content__title"><?php the_title();?></p>
                            <p class="technical-content__text"><?php echo $technical_post_method;?></p>
                            <p class="technical-content__image">
                                <img src="<?php echo $technical_post_eyecatching;?>" alt="<?php echo $technical_post_product;?>">
                            </p>
<?php
foreach ($terms as $key => $term):
$term_name = $term->name;
?>
                            <p class="technical-content__caption"><?php echo $term_name;?></p>
<?php endforeach; ?>
                            <a href="<?php the_permalink() ?>" class="blue-frame-link mgt-pc--15 mgt-sp--15">詳細</a>
                        </div>
                        <!-- [/technical-content] -->

                    </li>

<?php endwhile; wp_reset_postdata(); ?>

                </ul>

            </div>

        </div>
        <!-- [/container] -->

<?php endif; ?>

    </div>
    <!-- [/main] -->

</div>
<!-- [/contents] -->

<?php get_footer(); ?>