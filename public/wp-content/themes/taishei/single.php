<?php get_header(); ?>

    <div class="contents">

        <div class="main">

            <div class="main-keyvisual main-keyvisual--information">
                <div class="main-keyvisual__inner">
                    <h2 class="main-keyvisual__title">
                        <span class="main-keyvisual__title-jp">お知らせ</span>
                        <span class="main-keyvisual__title-en">INFORMATION</span>
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

            <div class="container mgt-pc--30 mgt-sp--30 mgb-pc--200 mgb-sp--100">

                <section class="section">

<?php
$query_array = $wp_query->query_vars;
$query_array['order'] = 'DESC';
query_posts($query_array);
?>

<?php if (have_posts()) :?>

<?php
$cat1 = get_the_terms($post->ID,'category');
$now_cat1 = $cat1[0];
$now_cat1_slug = $now_cat1->slug;
$now_cat1_name = $now_cat1->name;
$now_cat1_id = $now_cat1->term_id;
?>

<?php while (have_posts()) : the_post(); ?>

                    <div class="section-info mgb-pc--80 mgb-sp--50 js-fadein">

                        <div class="title-border-bottom mgb-pc--10 mgb-sp--10">

                            <h3 class="section-info__title"><?php the_title(); ?></h3>

                            <div class="section-info__date section-info__date--release sp-hide">
                                <p class="section-info__date-text"><?php echo date("Y-m-d", strtotime($post -> post_date));?></p>
                                <p class="section-info__date-category"><?php echo $now_cat1_name;?></p>
                            </div>

                        </div>
                        <!-- [/title-border-bottom] -->

                        <div class="wysiwyg">
                            <?php the_content(); ?>
                        </div>
                        <!-- [/wysiwyg] -->

                    </div>
                    <!-- [/section-info] -->

<?php endwhile; ?>

    <?php if(have_rows('news_post')): ?>

                    <section class="section">

                        <h4 class="section-border-title mgb-pc--20 mgb-sp--20 js-fadein">掲載新聞記事紹介</h4>

                        <div class="info-article js-fadein">

                            <ul class="info-article__list">
                                    <?php while( have_rows('news_post') ): the_row(); ?>
                                        <?php
                                        $news_post_data = get_sub_field('news_post_data');
                                        $news_post_title = get_sub_field('news_post_title');
                                        $news_post_pdf = get_sub_field('news_post_pdf');
                                        ?>
                                        <li class="info-article__list-item">
                                            <dl class="info-article__menu">
                                                <dt class="info-article__menu-title"><?php echo $news_post_data ?></dt>
                                                <dd class="info-article__menu-text">
                                                    <a href="<?php echo esc_url( $news_post_pdf );?>" class="info-article__menu-text-link">
                                                        <span class="info-article__menu-text-link-text"><?php echo $news_post_title ?></span>
                                                        <span class="info-article__menu-text-link-pdf"><?php echo do_shortcode('[filesize]'.esc_url( $news_post_pdf ).'[/filesize]');?></span>
                                                    </a>
                                                </dd>
                                            </dl>
                                        </li>
                                    <?php endwhile; ?>
                            </ul>
                            <!-- [/info-article__list] -->

                        </div>
                        <!-- [/info-article] -->

                    </section>
                    <!-- [/section] -->

    <?php endif; ?>

<?php endif; ?>

                </section>
                <!-- [/section] -->

            </div>
            <!-- [/container] -->

        </div>
        <!-- [/main] -->

    </div>
    <!-- [/contents] -->

<?php get_footer(); ?>