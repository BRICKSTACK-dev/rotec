<?php get_header(); ?>

<div class="contents">

    <div class="main">

        <div class="main-keyvisual main-keyvisual--corporate">
            <div class="main-keyvisual__inner">
                <h2 class="main-keyvisual__title">
                    <span class="main-keyvisual__title-jp">CSR報告書</span>
                    <span class="main-keyvisual__title-en">CORPORATE</span>
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

            <p class="mod-caption mgb-pc--20 mgb-sp--20 js-fadein">
                私たちはより良い環境の創造を目指し、豊かな社会の実現に貢献していきます。
            </p>
            <!-- [/mod-caption] -->

            <div class="three-contens mgb-pc--295 mgb-sp--100">


<?php if (have_posts()) :?>

                <ul class="three-contens__list">

<?php while ( have_posts() ) : the_post(); ?>

<?php
    $csr_post_image = get_field('csr_post_image');
?>

                    <li class="three-contens__list-item js-fadein">

                        <div class="csr-list">

                            <p class="border-title-small"><?php the_title();?></p>

                            <div class="csr-list__image">
                                <img src="<?php echo $csr_post_image;?>" alt="2018">
                            </div>

                            <a href="<?php the_permalink() ?>" class="blue-frame-link">詳細</a>

                        </div>
                        <!-- [/csr-list] -->

                    </li>

<?php endwhile; wp_reset_postdata(); ?>

                </ul>

<?php endif; ?>

            </div>
            <!-- [/three-contens] -->

        </div>
        <!-- [/container] -->

    </div>
    <!-- [/main] -->

</div>
<!-- [/contents] -->

<?php get_footer(); ?>