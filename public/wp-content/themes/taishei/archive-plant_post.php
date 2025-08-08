<?php get_header(); ?>

<div class="contents">

    <div class="main">

        <div class="main-keyvisual main-keyvisual--corporate">
            <div class="main-keyvisual__inner">
                <h2 class="main-keyvisual__title">
                    <span class="main-keyvisual__title-jp">合材工場</span>
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

                    <div class="map-area-head__image">
                        <img src="/img/corporate/img_map.png" alt="" usemap="#ImageMap" id="maparea">
                        <map name="ImageMap">
                            <area shape="poly" coords="411,33,427,50,442,67,454,77,460,79,473,81,478,87,487,88,503,73,505,78,497,90,497,94,515,83,526,67,535,70,548,65,554,58,554,56,558,53,563,49,564,46,568,47,570,43,574,42,573,40,573,37,576,35,579,41,584,40,590,37,596,32,600,30,602,31,601,39,595,39,592,42,586,44,579,48,574,52,570,53,567,55,559,61,557,66,548,71,536,73,530,77,523,80,517,87,511,96,514,106,545,89,549,91,522,108,509,115,493,120,487,123,469,123,449,145,449,152,446,157,431,148,416,140,407,134,399,134,384,144,372,135,366,144,373,150,378,149,390,159,385,164,376,161,369,165,370,170,362,175,358,172,356,167,361,155,354,147,351,145,351,141,352,137,353,132,356,129,362,126,367,124,372,119,366,112,367,108,372,107,380,113,385,111,390,114,396,109,394,101,394,94,396,91,404,84,402,73,407,64,402,48,400,43,402,34,411,31,411,31" href="<?php the_permalink(1398);?>" alt="" class="image-map-link" onFocus="this.blur();">
                            <area shape="poly" coords="384,170,394,176,399,174,398,201,405,207,409,217,414,225,416,236,410,251,404,258,400,277,389,274,384,283,387,299,385,317,380,322,375,320,370,324,365,318,359,313,353,314,344,318,340,321,336,319,337,311,334,309,336,305,336,303,341,301,346,301,346,296,351,291,348,289,348,284,349,279,355,276,353,275,350,273,350,269,345,267,352,258,355,250,357,242,359,234,357,225,356,225,351,226,350,221,355,220,359,209,357,207,356,202,354,200,359,195,364,195,367,190,367,183,368,178,375,180,377,185,382,188,391,190,393,180,379,184,379,179,383,170,383,170" href="<?php the_permalink(1469);?>" alt="" class="image-map-link" onFocus="this.blur();">
                            <area shape="poly" coords="380,321,373,339,382,357,372,361,369,373,354,383,346,375,340,370,333,376,329,372,330,369,328,367,322,368,317,366,316,374,312,372,311,370,308,369,309,366,309,362,307,357,307,354,313,349,319,351,322,349,319,346,319,344,318,340,320,337,318,335,315,337,313,333,315,328,319,325,326,323,329,317,333,315,337,319,341,319,348,315,354,312,360,313,365,317,369,323,374,319,374,319" href="<?php the_permalink(1471);?>" alt="" class="image-map-link" onFocus="this.blur();">
                            <area shape="poly" coords="318,276,319,285,330,290,342,283,345,269,349,270,354,277,352,281,350,282,348,291,350,292,347,298,346,302,336,305,335,311,337,313,337,321,333,317,324,325,314,332,313,336,317,338,320,337,320,344,320,349,323,352,321,354,314,351,309,355,308,362,307,370,298,375,294,374,291,375,290,373,292,364,290,364,290,360,284,355,286,354,292,347,291,343,294,339,286,336,280,335,275,342,271,339,268,348,271,355,268,357,263,357,256,357,256,361,251,360,252,364,247,365,244,370,239,371,234,367,232,363,239,363,244,360,250,355,247,349,252,341,257,338,268,325,268,316,266,312,268,307,271,305,279,302,285,301,286,304,283,309,277,318,281,325,287,320,302,315,308,312,317,307,309,292,309,283,317,275,317,276" href="<?php the_permalink(1470);?>" alt="" class="image-map-link" onFocus="this.blur();">
                            <area shape="poly" coords="319,366,324,369,331,367,330,374,333,377,334,382,327,391,324,391,323,388,324,379,327,377,321,376,317,379,317,381,313,384,312,386,309,393,297,390,289,389,277,392,277,391,281,386,277,386,274,389,270,385,270,381,271,378,265,383,264,391,273,396,272,402,262,402,255,409,255,411,248,419,244,414,246,410,250,408,250,397,254,395,254,394,249,392,248,385,251,383,258,382,259,373,257,371,259,365,255,359,257,355,262,355,270,355,270,351,268,348,270,341,271,338,274,338,276,339,281,334,285,335,291,337,293,338,291,341,291,346,291,349,288,353,285,353,284,355,288,356,290,364,293,364,290,372,292,373,298,373,301,372,306,368,308,361,310,362,309,369,312,370,316,375,318,366,319,366" href="<?php the_permalink(1474);?>" alt="" class="image-map-link" onFocus="this.blur();">
                            <area shape="poly" coords="205,356,218,356,226,353,226,361,231,364,235,366,240,366,247,361,251,356,255,359,258,363,257,370,258,373,256,380,249,381,247,384,248,390,253,394,247,397,250,406,247,408,243,411,243,415,247,417,243,424,240,424,231,421,229,416,224,411,221,410,221,405,222,400,221,398,225,394,229,392,230,388,229,386,224,387,221,388,215,388,210,384,205,385,200,385,199,379,199,374,202,371,201,369,206,367,203,362,203,359,203,359" href="<?php the_permalink(1476);?>" alt="" class="image-map-link" onFocus="this.blur();">
                            <area shape="poly" coords="179,361,189,361,203,360,206,368,204,371,201,372,202,375,200,380,201,386,194,391,190,395,184,394,180,394,175,397,169,396,166,398,158,401,152,403,150,397,146,399,143,408,142,414,134,410,131,409,125,408,117,412,113,409,111,408,108,410,106,405,108,401,108,398,109,395,113,395,121,395,127,388,135,384,143,377,150,372,155,366,154,364,167,360,173,360,178,363" href="<?php the_permalink(1480);?>" alt=""  class="image-map-link" onFocus="this.blur();">
                            <area shape="poly" coords="190,396,196,396,209,401,212,413,200,422,196,431,188,423,180,423,172,428,171,433,165,440,166,447,157,446,153,442,149,440,148,432,146,428,146,424,137,428,138,425,152,418,156,410,158,406,163,403,167,405,169,410,176,408,181,402,179,399,189,396,194,397" href="<?php the_permalink(1479);?>" alt="" class="image-map-link" onFocus="this.blur();">
                            <area shape="poly" coords="111,411,111,415,114,420,124,419,129,418,131,422,131,427,126,431,132,430,136,433,140,436,137,445,125,466,122,481,119,488,111,485,114,491,102,498,96,492,87,489,86,485,88,472,87,465,89,462,98,453,96,448,94,439,91,434,87,441,80,435,76,430,76,422,79,421,84,420,91,418,94,417,96,411,103,410,105,410,105,410,552,376,555,381,563,381,561,388,556,394,559,397,553,404,548,403,545,405,510,457,483,477,458,474,464,436,533,400,552,355,552,353,554,357,554,379,557,388" href="<?php the_permalink(1481);?>" alt="" class="image-map-link" onFocus="this.blur();">
                        </map>
                    </div>

<?php if (have_posts()) :?>

                    <ul class="map-area-head__list">

<?php while(have_posts()) : the_post(); ?>

                        <li class="map-area-head__list-item">
                            <a href="<?php the_permalink();?>" class="blue-frame-link blue-frame-link--map"><?php the_title();?></a>
                        </li>
<?php endwhile; ?>

                    </ul>

<?php endif; ?>

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

<?php if (have_posts()) :?>

<?php while(have_posts()) : the_post(); ?>

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

<?php endwhile; ?>
<?php endif; ?>

        </div>
        <!-- [/container] -->

    </div>
    <!-- [/main] -->

</div>
<!-- [/contents] -->

<?php get_footer(); ?>