<?php get_header(); ?>


<div class="contents contents--work">

    <div class="main">

        <div class="main-keyvisual main-keyvisual--work">
            <div class="main-keyvisual__inner">
                <h2 class="main-keyvisual__title">
                    <span class="main-keyvisual__title-jp">実績紹介</span>
                    <span class="main-keyvisual__title-en">Works</span>
                </h2>
            </div>
        </div>
        <!-- [/main-keyvisual] -->

        <div class="breadcrumb breadcrumb--bg">
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

            <div class="three-contens three-contens--work">
<?php if (have_posts()) :?>

                <ul class="three-contens__list">

<?php while(have_posts()) : the_post(); ?>
<?php
$works_post_thumb = get_field('works_post_thumb');
?>
                    <li class="three-contens__list-item js-fadein">

                        <a href="<?php the_permalink();?>" class="work-links">
                            <img src="<?php echo $works_post_thumb; ?>" alt="">
                            <p class="work-links__text"><?php the_title();?></p>
                        </a>

                    </li>

<?php endwhile; ?>

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