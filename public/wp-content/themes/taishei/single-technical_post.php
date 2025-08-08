<?php get_header(); ?>

<?php
$technical_post_netis = get_field('technical_post_netis');
$technical_post_product = get_field('technical_post_product');
$technical_post_method = get_field('technical_post_method');
$technical_post_catchcopy = get_field('technical_post_catchcopy');
$technical_post_overview = get_field('technical_post_overview');
$technical_post_usetext = get_field('technical_post_usetext');
$technical_post_useimage = get_field('technical_post_useimage');
$technical_post_usecaption = get_field('technical_post_usecaption');
$technical_post_case_text = get_field('technical_post_case_text');
$technical_post_case_subimage = get_field('technical_post_case_subimage');
$technical_post_case_subcaption = get_field('technical_post_case_subcaption');
?>

<div class="contents contents--technical">

    <div class="main">

<?php if (have_posts()) :?>

        <div class="main-keyvisual main-keyvisual--technical">
            <div class="main-keyvisual__inner">
                <h2 class="main-keyvisual__title">
                    <span class="main-keyvisual__title-jp"><?php echo $technical_post_product;?>　/　<br class="pc-hide"><?php echo $technical_post_method ?></span>
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

            <section class="technical-detail">

                <div class="technical-detail__input js-fadein">
                    <p class="technical-detail__title"><?php echo $technical_post_product;?>　/　<?php echo $technical_post_method ?></p>

<?php if($technical_post_netis):?>
                    <p class="technical-detail__text">NETIS登録番号:<?php echo $technical_post_netis ?></p>
<?php endif;?>

                </div>

                <div class="section-technical">

                    <h2 class="section-technical__title js-fadein"><?php echo $technical_post_catchcopy;?></h2>

<?php if(have_rows('technical_post_keyvisual')): ?>
    <?php while( have_rows('technical_post_keyvisual') ): the_row(); ?>
        <?php
        $technical_keyvisual1 = get_sub_field('technical_keyvisual1');
        $technical_keyvisual2 = get_sub_field('technical_keyvisual2');
        ?>

<?php if($technical_keyvisual1):?>
                    <div class="section-technical__image js-fadein">
                        <img src="<?php echo $technical_keyvisual1;?>" alt="">
                    </div>
<?php endif;?>

<?php if($technical_keyvisual2):?>
                    <div class="section-technical__image js-fadein">
                        <img src="<?php echo $technical_keyvisual2;?>" alt="">
                    </div>
<?php endif;?>

    <?php endwhile; ?>
<?php endif; ?>

                    <section class="section-technical-detail">

                        <h3 class="section-border-title mgb-pc--30 mgb-sp--30 js-fadein">技術概要</h3>

                        <div class="section-technical__free js-fadein">
<?php echo $technical_post_overview;?>
                        </div>

<?php if(have_rows('technical_post_overview_image')): ?>
    <?php while( have_rows('technical_post_overview_image') ): the_row(); ?>
        <?php
        $technical_overview_image1 = get_sub_field('technical_overview_image1');
        $technical_overview_caption = get_sub_field('technical_overview_caption');
        ?>

                        <img src="<?php echo $technical_overview_image1;?>" alt="<?php echo $technical_overview_caption;?>" class="js-fadein">
                        <p class="js-fadein"><?php echo $technical_overview_caption;?></p>


    <?php endwhile; ?>
<?php endif; ?>

                    </section>
                    <!-- [/section-technical-detail] -->

                    <section class="section-technical-detail">

                        <h3 class="section-border-title mgb-pc--30 mgb-sp--30 js-fadein"><?php echo $technical_post_product;?>　/　<br class="pc-hide"><?php echo $technical_post_method ?>の特長</h3>

<?php if(have_rows('technical_post_detail_feature')): ?>
    <?php while( have_rows('technical_post_detail_feature') ): the_row(); ?>
        <?php
        $technical_detail_title = get_sub_field('technical_detail_title');
        $technical_detail_image = get_sub_field('technical_detail_image');
        $technical_detail_caption = get_sub_field('technical_detail_caption');
        ?>

                        <p class="js-fadein"><?php echo $technical_detail_title;?></p>
                        <img class="js-fadein" src="<?php echo $technical_detail_image;?>" alt="<?php echo $technical_detail_caption;?>">

                        <div class="blue-num js-fadein">
                            <ul class="blue-num__list">

    <?php if(have_rows('technical_detail_contents')): ?>
        <?php while( have_rows('technical_detail_contents') ): the_row(); ?>
            <?php
            $technical_contents_text = get_sub_field('technical_contents_text');
            ?>

                                <li class="blue-num__list-item js-fadein"><?php echo $technical_contents_text;?></li>

        <?php endwhile; ?>
    <?php endif; ?>

                            </ul>
                        </div>
                        <!-- [/blue-num] -->

                        <p class="js-fadein"><?php echo $technical_detail_caption;?></p>

    <?php if(have_rows('technical_detail_sub')): ?>
        <?php while( have_rows('technical_detail_sub') ): the_row(); ?>
            <?php
            $technical_sub_image = get_sub_field('technical_sub_image');
            $technical_sub_text = get_sub_field('technical_sub_text');
            ?>

                        <p class="js-fadein"><img src="<?php echo $technical_sub_image;?>" alt="<?php echo $technical_sub_text;?>"></p>
                        <p class="js-fadein"><?php echo $technical_sub_text;?></p>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>

                    </section>
                    <!-- [/section-technical-detail] -->

                    <section class="section-technical-detail">

                        <h3 class="section-border-title mgb-pc--30 mgb-sp--30 js-fadein">使用用途</h3>

<?php if(have_rows('technical_post_detail_use')): ?>
    <?php while( have_rows('technical_post_detail_use') ): the_row(); ?>
        <?php
        $technical_detail_title = get_sub_field('technical_detail_title');
        $technical_detail_image = get_sub_field('technical_detail_image');
        $technical_detail_caption = get_sub_field('technical_detail_caption');
        ?>

                        <p class="js-fadein"><?php echo $technical_detail_title;?></p>
                        <img class="js-fadein" src="<?php echo $technical_detail_image;?>" alt="<?php echo $technical_detail_caption;?>">

                        <div class="blue-num">
                            <ul class="blue-num__list">

    <?php if(have_rows('technical_detail_contents')): ?>
        <?php while( have_rows('technical_detail_contents') ): the_row(); ?>
            <?php
            $technical_contents_text = get_sub_field('technical_contents_text');
            ?>

                                <li class="blue-num__list-item js-fadein"><?php echo $technical_contents_text;?></li>


        <?php endwhile; ?>
    <?php endif; ?>

                            </ul>
                        </div>
                        <!-- [/blue-num] -->

                        <p class="js-fadein"><?php echo $technical_detail_caption;?></p>

                        <div class="technical-captionimage">

                            <ul class="technical-captionimage__list">

    <?php if(have_rows('technical_detail_sub')): ?>
        <?php while( have_rows('technical_detail_sub') ): the_row(); ?>
            <?php
            $technical_sub_image = get_sub_field('technical_sub_image');
            $technical_sub_text = get_sub_field('technical_sub_text');
            ?>

                                <li class="technical-captionimage__list-item">
                                    <p class="js-fadein"><img src="<?php echo $technical_sub_image;?>" alt="<?php echo $technical_sub_text;?>"></p>
                                    <p class="js-fadein"><?php echo $technical_sub_text;?></p>
                                </li>

        <?php endwhile; ?>
    <?php endif; ?>

                            </ul>

                        </div>
                        <!-- [/technical-captionimage] -->

    <?php endwhile; ?>
<?php endif; ?>


                    </section>
                    <!-- [/section-technical-detail] -->


<?php echo $technical_post_usetext;?>
                    <img class="js-fadein" src="<?php echo $technical_post_useimage;?>" alt="<?php echo $technical_post_usecaption;?>">
<?php echo $technical_post_usecaption;?>

<?php if(have_rows('technical_post_technique')): ?>
    <?php while( have_rows('technical_post_technique') ): the_row(); ?>
        <?php
        $technical_technique_image = get_sub_field('technical_technique_image');
        $technical_technique_caption = get_sub_field('technical_technique_caption');
        ?>

                    <p class="js-fadein"><img src="<?php echo $technical_technique_image;?>" alt="<?php echo $technical_technique_caption;?>"></p>
                    <p class="js-fadein"><?php echo $technical_technique_caption;?></p>

    <?php if(have_rows('technical_technique_subimage')): ?>
        <?php while( have_rows('technical_technique_subimage') ): the_row(); ?>
            <?php
            $technical_subimage_image = get_sub_field('technical_subimage_image');
            $technical_subimage_caption = get_sub_field('technical_subimage_caption');
            ?>

                    <p class="js-fadein"><img src="<?php echo $technical_subimage_image;?>" alt="<?php echo $technical_subimage_caption;?>"></p>
                    <p class="js-fadein"><?php echo $technical_subimage_caption;?></p>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>

<?php echo $technical_post_case_text;?>
                    <img class="js-fadein" src="<?php echo $technical_post_case_subimage;?>" alt="<?php echo $technical_post_case_subcaption;?>">
<?php echo $technical_post_case_subcaption;?>

                    <div class="technical-captionimage">

                        <ul class="technical-captionimage__list">

<?php if(have_rows('technical_post_example')): ?>
    <?php while( have_rows('technical_post_example') ): the_row(); ?>
        <?php
        $technical_example_image = get_sub_field('technical_example_image');
        $technical_example_caption = get_sub_field('technical_example_caption');
        ?>

                            <li class="technical-captionimage__list-item">
                                <div class="js-fadein"><img src="<?php echo $technical_example_image;?>" alt="<?php echo $technical_example_caption;?>"></div>
                                <p class="js-fadein technical-captionimage__list-item-text"><?php echo $technical_example_caption;?></p>
                            </li>

    <?php endwhile; ?>
<?php endif; ?>

                        </ul>

                    </div>
                    <!-- [/technical-captionimage] -->

                </div>
                <!-- [/section-technical] -->

            </section>
            <!-- [/technical-detail] -->

            <div class="technical-banner js-fadein">
                <p class="technical-banner__title">技術に関するお問い合わせはこちら</p>
                <div class="technical-banner__main">
                    <div class="technical-banner__main-inner">
                        <div class="technical-banner__data">
                            <p class="technical-banner__data-title">本社営業部</p>
                            <a href="tel:0359259436" class="technical-banner__data-tel">03-5925-9436</a>
                            <p class="technical-banner__data-caption">月～金曜日8:30～17:00（土日・祝日は休み）</p>
                        </div>
                    </div>
                    <div class="technical-banner__main-inner">
                        <a href="/contact/" class="technical-banner__data-link">お問い合わせ</a>
                    </div>
                </div>
            </div>
            <!-- [/technical-banner] -->

        </div>
        <!-- [/container] -->

<?php endif; ?>

    </div>
    <!-- [/main] -->

</div>
<!-- [/contents] -->

<?php get_footer(); ?>