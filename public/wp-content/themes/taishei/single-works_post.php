<?php get_header(); ?>

<div class="contents contents--work">

    <div class="main">

        <div class="main-keyvisual main-keyvisual--work">
            <div class="main-keyvisual__inner">
                <h2 class="main-keyvisual__title">
                    <span class="main-keyvisual__title-jp"><?php the_title(); ?></span>
                    <span class="main-keyvisual__title-en">Works</span>
                </h2>
            </div>
        </div>
        <!-- [/main-keyvisual] -->

        <div class="breadcrumb breadcrumb--bg">
            <?php echo esc_html( $post->_yoast_wpseo_metadesc ); ?>
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

        <div class="container mgt-pc--30 mgt-sp--30">

            <div class="three-contens three-contens--big-space mgb-pc--90 mgb-sp--90">

                <ul class="three-contens__list">

<?php if(have_rows('works_post_detail')): ?>
    <?php while( have_rows('works_post_detail') ): the_row(); ?>
        <?php
        $works_post_title = get_sub_field('works_post_title');
        $works_post_image = get_sub_field('works_post_image');
        $works_post_completion = get_sub_field('works_post_completion');
        $works_post_place = get_sub_field('works_post_place');
        $works_post_construction = get_sub_field('works_post_construction');
        ?>
                    <li class="three-contens__list-item js-fadein">

                            <p class="border-title-small works-height"><?php echo $works_post_title;?></p>
                            <div class="work-detail__image">
                                <img src="<?php echo $works_post_image;?>" alt="">
                            </div>
                            <ul class="work-detail__category">

<?php if ($works_post_completion):?>
                                <li class="work-detail__category-item">
                                    <dl class="work-detail__category-item-list">
                                        <dt class="work-detail__category-item-list-title">竣工</dt>
                                        <dd class="work-detail__category-item-list-text"><?php echo $works_post_completion;?></dd>
                                    </dl>
                                </li>
<?php endif;?>
<?php if ($works_post_place):?>
                                <li class="work-detail__category-item">
                                    <dl class="work-detail__category-item-list">
                                        <dt class="work-detail__category-item-list-title">施工場所</dt>
                                        <dd class="work-detail__category-item-list-text"><?php echo $works_post_place;?></dd>
                                    </dl>
                                </li>
<?php endif;?>

<?php if(have_rows('works_post_construction')): ?>
    <?php while( have_rows('works_post_construction') ): the_row(); ?>
        <?php
        $works_construction_name = get_sub_field('works_construction_name');
        $works_construction_url = get_sub_field('works_construction_url');
        ?>

                                <li class="work-detail__category-item">
                                    <dl class="work-detail__category-item-list">
                                        <dt class="work-detail__category-item-list-title">採用工法</dt>
                                        <dd class="work-detail__category-item-list-link">
                                            <a href="<?php echo $works_construction_url;?>"><?php echo $works_construction_name;?></a>
                                        </dd>
                                    </dl>
                                </li>

    <?php endwhile; ?>
<?php endif; ?>


                            </ul>

                    </li>

    <?php endwhile; ?>
<?php endif; ?>

                </ul>

            </div>
            <!-- [/three-contens] -->

            <section class="section">

                <h3 class="section-border-title mgb-pc--35 mgb-sp--35 js-fadein">その他の実績</h3>

                <div class="three-contens">

<?php
$id = get_the_ID();
$args = array(
    'post_type' => 'works_post',
    'post__not_in' => array($id)
);

$the_query = new WP_Query( $args );
?>

                    <ul class="three-contens__list">

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <li class="three-contens__list-item js-fadein">
                            <a href="<?php the_permalink();?>" class="work-detail-link"><?php the_title();?></a>
                        </li>

<?php endwhile; wp_reset_postdata(); ?>

                    </ul>

                </div>
                <!-- [/three-contens] -->

            </section>
            <!-- [/section] -->

        </div>
        <!-- [/container] -->


    </div>
    <!-- [/main] -->

</div>
<!-- [/contents] -->

<?php get_footer(); ?>