<?php get_header(); ?>

<?php
$works_post_image = get_field('works_post_image');
$works_post_completion_jp = get_field('works_post_completion_jp');
$works_post_completion = get_field('works_post_completion');
$works_post_place = get_field('works_post_place');
?>

<div class="contents contents--work">

    <div class="main">

        <div class="main-keyvisual main-keyvisual--work">
            <div class="main-keyvisual__inner">
                <h2 class="main-keyvisual__title">
                    <span class="main-keyvisual__title-jp">道路</span>
                    <span class="main-keyvisual__title-en">Works</span>
                </h2>
            </div>
        </div>
        <!-- [/main-keyvisual] -->

        <div class="breadcrumb breadcrumb--bg">
            <div class="container">
                <ul class="breadcrumb__list">
                    <li class="breadcrumb__list-item breadcrumb__list-item--blue"><a href="/">TOP</a></li>
                    <li class="breadcrumb__list-item"><a href="/">実績紹介</a></li>
                    <li class="breadcrumb__list-item">道路</li>
                </ul>
            </div>
        </div>
        <!-- [/breadcrumb] -->

        <div class="container mgt-pc--30 mgt-sp--30">


            <div class="three-contens mgb-pc--90 mgb-sp--90">
                <ul class="three-contens__list">

<?php if (have_posts()) :?>

                    <li class="three-contens__list-item js-fadein">

                            <p class="border-title-small"><?php the_title(); ?></p>
                            <div class="work-detail__image">
                                <img src="<?php echo $works_post_image;?>" alt="">
                            </div>
                            <ul class="work-detail__category">

<?php if(have_rows('works_post_construction')): ?>
    <?php while( have_rows('works_post_construction') ): the_row(); ?>
        <?php
        $works_construction_name = get_sub_field('works_construction_name');
        $works_construction_url = get_sub_field('works_construction_url');
        ?>

                                <li class="work-detail__category-item">
                                    <dl class="work-detail__category-item-list">
                                        <dt class="work-detail__category-item-list-title"><?php echo $works_construction_name;?></dt>
                                        <dd class="work-detail__category-item-list-text"><?php echo $technical_overview_caption;?></dd>
                                    </dl>
                                </li>

    <?php endwhile; ?>
<?php endif; ?>

                            </ul>

<?php endif; ?>

                    </li>

                </ul>

            </div>
            <!-- [/three-contens] -->

            <section class="section">

                <h3 class="section-border-title mgb-pc--35 mgb-sp--35 js-fadein">その他の実績</h3>

                <div class="three-contens">

                    <ul class="three-contens__list">

                        <li class="three-contens__list-item js-fadein">
                            <div class="work-detail-link">道路</div>
                        </li>

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