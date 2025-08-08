<?php get_header(); ?>

<div class="contents">

    <div class="main">

<?php if (have_posts()) :?>

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

        <div class="container mgt-pc--40 mgt-sp--30 mgb-pc--350 mgb-sp--100">

            <div class="map-area">

                <div class="map-area-head mgb-pc--20">

                    <div class="map-area-head__image map-area-head__image--single">
                        <?php the_post_thumbnail('full'); ?>
                    </div>

                </div>

                <div class="map-area-body">

                    <p class="map-area-body__title mgb-pc--10">各合材工場の受け入れ品目、取り扱い品目については下記をご確認ください。</p>

                    <div class="mod-form-buttons mgb-pc--10">
                        <a href="/business/productsales#sales1" class="blue-frame-link blue-frame-link--small">受け入れ品目についてはこちら</a>
                        <a href="/business/productsales#sales2" class="blue-frame-link blue-frame-link--small">取り扱い品目についてはこちら</a>
                    </div>

                    <p class="map-area-body__note">※商品等の取り扱い、在庫状況は各工場へ事前にお問い合わせください。</p>

                </div>

            </div>
            <!-- [/map-area] -->

            <section class="section mgb-pc--50 mgb-pc--0">

                <h3 class="section-border-title section-border-title--narrow mgb-pc--30"><?php the_title();?></h3>

                <div class="network-area-table-outer">

                    <table class="network-area-table">
                        <thead>
                            <tr>
                                <th>合材工場</th>
                                <th colspan="3">住所</th>
                                <th>TEL</th>
                                <th>FAX</th>
                            </tr>
                        </thead>
                        <tbody>

<?php if(have_rows('plant_post_detail')): ?>
    <?php while( have_rows('plant_post_detail') ): the_row(); ?>
        <?php
        $plant_post_name = get_sub_field('plant_post_name');
        $plant_post_code = get_sub_field('plant_post_code');
        $plant_post_address = get_sub_field('plant_post_address');
        $plant_post_map = get_sub_field('plant_post_map');
        $plant_post_tel = get_sub_field('plant_post_tel');
        $plant_post_fax = get_sub_field('plant_post_fax');
        ?>

                            <tr>
                                <th><?php echo $plant_post_name;?></th>
                                <td class="network-area-table__border">〒<?php echo $plant_post_code;?></td>
                                <td><?php echo $plant_post_address;?></td>
                                <td><a href="<?php echo $plant_post_map;?>" class="map-links" target="_blank">MAP</a></td>
                                <td class="network-area-table__border network-area-table__center"><?php echo $plant_post_tel;?></td>
                                <td class="network-area-table__border network-area-table__center"><?php echo $plant_post_fax;?></td>
                            </tr>

    <?php endwhile; ?>
<?php endif; ?>

                        </tbody>
                    </table>
                    <!-- [/network-area-table] -->

                </div>
                <!-- [/network-area-table-outer] -->

            </section>
            <!-- [/section] -->

        </div>
        <!-- [/container] -->

    </div>
    <!-- [/main] -->

<?php endif; ?>

</div>
<!-- [/contents] -->

<?php get_footer(); ?>