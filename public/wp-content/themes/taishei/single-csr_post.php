<?php get_header(); ?>

<?php
$csr_post_notes = get_field('csr_post_notes');
$csr_post_pdf = get_field('csr_post_pdf');
$csr_post_image = get_field('csr_post_image');
?>

<div class="contents">

    <div class="main">

        <div class="main-keyvisual main-keyvisual--corporate">
            <div class="main-keyvisual__inner">
                <h2 class="main-keyvisual__title">
                    <span class="main-keyvisual__title-jp"><?php the_title();?></span>
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

        <div class="container mgt-pc--30 mgt-sp--30 mgb-pc--150 mgb-sp--50">

            <div class="csr-contents">

                <div class="csr-contents__main js-fadein">
                    <div class="csr-contents__main-image mgb-pc--30 mgb-sp--30">
                        <img src="<?php echo $csr_post_image ?>" alt="">
                    </div>
                    <a href="<?php echo esc_url( $csr_post_pdf );?>" class="blue-frame-link mgb-pc--15 mgb-sp--15">
                        全ページダウンロード
                    </a>
                    <!-- [/blue-frame-link] -->
                    <div class="csr-contents__main-pdf">
                        <p class="csr-contents__main-pdf-item"><?php echo do_shortcode('[filesize]'.esc_url( $csr_post_pdf ).'[/filesize]');?></p>
                    </div>
                </div>

                <div class="csr-contents__detail">
					<div class="section-head mgb-pc--60 mgb-sp--60 js-fadein js-fadein--content">
						<p class="mod-text mgt-pc--30 mgt-sp--30 mgb-pc--30 mgb-sp--30">各項目のタイトルを選択すると、項目ごとのPDFがご覧いただけます。</p>
					</div>
                    <ul class="csr-contents__list">

                        <?php if(have_rows('csr_post_detail')): ?>
                            <?php while( have_rows('csr_post_detail') ): the_row(); ?>
                                <?php
                                $csr_post_num = get_sub_field('csr_post_num');
                                $csr_post_caption = get_sub_field('csr_post_caption');
                                $csr_post_pdf = get_sub_field('csr_post_pdf');
                                ?>

                                <li class="csr-contents__list-item js-fadein">
                                    <a href="<?php echo esc_url( $csr_post_pdf );?>" class="csr-contents__list-item-link">
                                        <dl class="csr-contents__page">
                                            <dt class="csr-contents__page-title"><?php echo $csr_post_num ?></dt>
                                            <dt class="csr-contents__page-text"><?php echo $csr_post_caption ?></dt>
                                        </dl>
                                    </a>
                                </li>

                            <?php endwhile; ?>
                        <?php endif; ?>

                    </ul>
                    <div class="csr-contents__caption js-fadein">
                        <?php echo $csr_post_notes ?>
                    </div>
                </div>

            </div>
            <!-- [/csr-contents] -->

        </div>
        <!-- [/container] -->

    </div>
    <!-- [/main] -->

</div>
<!-- [/contents] -->

<?php get_footer(); ?>