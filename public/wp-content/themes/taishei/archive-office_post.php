<?php get_header(); ?>

<div class="contents">

    <div class="main">

        <div class="main-keyvisual main-keyvisual--corporate">
            <div class="main-keyvisual__inner">
                <h2 class="main-keyvisual__title">
                    <span class="main-keyvisual__title-jp">営業所</span>
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

                <div class="map-area-head">

                    <div class="map-area-head__image">
                        <img src="/img/corporate/img_map.png" alt="" usemap="#ImageMap" id="maparea">
                        <map name="ImageMap">
                            <area shape="poly" coords="411,33,427,50,442,67,454,77,460,79,473,81,478,87,487,88,503,73,505,78,497,90,497,94,515,83,526,67,535,70,548,65,554,58,554,56,558,53,563,49,564,46,568,47,570,43,574,42,573,40,573,37,576,35,579,41,584,40,590,37,596,32,600,30,602,31,601,39,595,39,592,42,586,44,579,48,574,52,570,53,567,55,559,61,557,66,548,71,536,73,530,77,523,80,517,87,511,96,514,106,545,89,549,91,522,108,509,115,493,120,487,123,469,123,449,145,449,152,446,157,431,148,416,140,407,134,399,134,384,144,372,135,366,144,373,150,378,149,390,159,385,164,376,161,369,165,370,170,362,175,358,172,356,167,361,155,354,147,351,145,351,141,352,137,353,132,356,129,362,126,367,124,372,119,366,112,367,108,372,107,380,113,385,111,390,114,396,109,394,101,394,94,396,91,404,84,402,73,407,64,402,48,400,43,402,34,411,31,411,31" href="#anchor-office1" alt="" class="image-map-link" onFocus="this.blur();">
                            <area shape="poly" coords="384,170,394,176,399,174,398,201,405,207,409,217,414,225,416,236,410,251,404,258,400,277,389,274,384,283,387,299,385,317,380,322,375,320,370,324,365,318,359,313,353,314,344,318,340,321,336,319,337,311,334,309,336,305,336,303,341,301,346,301,346,296,351,291,348,289,348,284,349,279,355,276,353,275,350,273,350,269,345,267,352,258,355,250,357,242,359,234,357,225,356,225,351,226,350,221,355,220,359,209,357,207,356,202,354,200,359,195,364,195,367,190,367,183,368,178,375,180,377,185,382,188,391,190,393,180,379,184,379,179,383,170,383,170" href="#anchor-office2" alt="" class="image-map-link" onFocus="this.blur();">
                            <area shape="poly" coords="380,321,373,339,382,357,372,361,369,373,354,383,346,375,340,370,333,376,329,372,330,369,328,367,322,368,317,366,316,374,312,372,311,370,308,369,309,366,309,362,307,357,307,354,313,349,319,351,322,349,319,346,319,344,318,340,320,337,318,335,315,337,313,333,315,328,319,325,326,323,329,317,333,315,337,319,341,319,348,315,354,312,360,313,365,317,369,323,374,319,374,319" href="#anchor-office3" alt="" class="image-map-link" onFocus="this.blur();">
                            <area shape="poly" coords="318,276,319,285,330,290,342,283,345,269,349,270,354,277,352,281,350,282,348,291,350,292,347,298,346,302,336,305,335,311,337,313,337,321,333,317,324,325,314,332,313,336,317,338,320,337,320,344,320,349,323,352,321,354,314,351,309,355,308,362,307,370,298,375,294,374,291,375,290,373,292,364,290,364,290,360,284,355,286,354,292,347,291,343,294,339,286,336,280,335,275,342,271,339,268,348,271,355,268,357,263,357,256,357,256,361,251,360,252,364,247,365,244,370,239,371,234,367,232,363,239,363,244,360,250,355,247,349,252,341,257,338,268,325,268,316,266,312,268,307,271,305,279,302,285,301,286,304,283,309,277,318,281,325,287,320,302,315,308,312,317,307,309,292,309,283,317,275,317,276" href="#anchor-office4" alt="" class="image-map-link" onFocus="this.blur();">
                            <area shape="poly" coords="319,366,324,369,331,367,330,374,333,377,334,382,327,391,324,391,323,388,324,379,327,377,321,376,317,379,317,381,313,384,312,386,309,393,297,390,289,389,277,392,277,391,281,386,277,386,274,389,270,385,270,381,271,378,265,383,264,391,273,396,272,402,262,402,255,409,255,411,248,419,244,414,246,410,250,408,250,397,254,395,254,394,249,392,248,385,251,383,258,382,259,373,257,371,259,365,255,359,257,355,262,355,270,355,270,351,268,348,270,341,271,338,274,338,276,339,281,334,285,335,291,337,293,338,291,341,291,346,291,349,288,353,285,353,284,355,288,356,290,364,293,364,290,372,292,373,298,373,301,372,306,368,308,361,310,362,309,369,312,370,316,375,318,366,319,366" href="#anchor-office5" alt="" class="image-map-link" onFocus="this.blur();">
                            <area shape="poly" coords="205,356,218,356,226,353,226,361,231,364,235,366,240,366,247,361,251,356,255,359,258,363,257,370,258,373,256,380,249,381,247,384,248,390,253,394,247,397,250,406,247,408,243,411,243,415,247,417,243,424,240,424,231,421,229,416,224,411,221,410,221,405,222,400,221,398,225,394,229,392,230,388,229,386,224,387,221,388,215,388,210,384,205,385,200,385,199,379,199,374,202,371,201,369,206,367,203,362,203,359,203,359" href="#anchor-office6" alt="" class="image-map-link" onFocus="this.blur();">
                            <area shape="poly" coords="179,361,189,361,203,360,206,368,204,371,201,372,202,375,200,380,201,386,194,391,190,395,184,394,180,394,175,397,169,396,166,398,158,401,152,403,150,397,146,399,143,408,142,414,134,410,131,409,125,408,117,412,113,409,111,408,108,410,106,405,108,401,108,398,109,395,113,395,121,395,127,388,135,384,143,377,150,372,155,366,154,364,167,360,173,360,178,363" href="#anchor-office7" alt=""  class="image-map-link" onFocus="this.blur();">
                            <area shape="poly" coords="190,396,196,396,209,401,212,413,200,422,196,431,188,423,180,423,172,428,171,433,165,440,166,447,157,446,153,442,149,440,148,432,146,428,146,424,137,428,138,425,152,418,156,410,158,406,163,403,167,405,169,410,176,408,181,402,179,399,189,396,194,397" href="#anchor-office8" alt="" class="image-map-link" onFocus="this.blur();">
                            <area shape="poly" coords="111,411,111,415,114,420,124,419,129,418,131,422,131,427,126,431,132,430,136,433,140,436,137,445,125,466,122,481,119,488,111,485,114,491,102,498,96,492,87,489,86,485,88,472,87,465,89,462,98,453,96,448,94,439,91,434,87,441,80,435,76,430,76,422,79,421,84,420,91,418,94,417,96,411,103,410,105,410,105,410,552,376,555,381,563,381,561,388,556,394,559,397,553,404,548,403,545,405,510,457,483,477,458,474,464,436,533,400,552,355,552,353,554,357,554,379,557,388" href="#anchor-office9" alt="" class="image-map-link" onFocus="this.blur();">
                        </map>
                    </div>

                    <ul class="map-area-head__list map-area-head__list--office">
                        <li class="map-area-head__list-item">
                            <a href="#anchor-office1" class="blue-frame-link blue-frame-link--map">北海道エリア</a>
                        </li>
                        <li class="map-area-head__list-item">
                            <a href="#anchor-office2" class="blue-frame-link blue-frame-link--map">東北エリア</a>
                        </li>
                        <li class="map-area-head__list-item">
                            <a href="#anchor-office3" class="blue-frame-link blue-frame-link--map">関東エリア</a>
                        </li>
                        <li class="map-area-head__list-item">
                            <a href="#anchor-office4" class="blue-frame-link blue-frame-link--map">北信越エリア</a>
                        </li>
                        <li class="map-area-head__list-item">
                            <a href="#anchor-office5" class="blue-frame-link blue-frame-link--map">中部エリア</a>
                        </li>
                        <li class="map-area-head__list-item">
                            <a href="#anchor-office6" class="blue-frame-link blue-frame-link--map">関西エリア</a>
                        </li>
                        <li class="map-area-head__list-item">
                            <a href="#anchor-office7" class="blue-frame-link blue-frame-link--map">中国エリア</a>
                        </li>
                        <li class="map-area-head__list-item">
                            <a href="#anchor-office8" class="blue-frame-link blue-frame-link--map">四国エリア</a>
                        </li>
                        <li class="map-area-head__list-item">
                            <a href="#anchor-office9" class="blue-frame-link blue-frame-link--map">九州エリア</a>
                        </li>
                        <li id="kokusai" class="map-area-head__list-item js-hover-none">
                            <a href="#anchor-office10" class="blue-frame-link blue-frame-link--map">国際支社</a>
                        </li>
                    </ul>

                </div>

            </div>
            <!-- [/map-area] -->

            <?php
            $args = array(
                'post_type' => 'office_post',
                'page_id' => 1383
            );

            $the_query = new WP_Query( $args );
            ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <section id="anchor-office0" class="section mgb-pc--50 mgb-sp--30">

                    <?php
                    $office_branch_code = get_field('office_branch_code');
                    $office_branch_address = get_field('office_branch_address');
                    $office_branch_map = get_field('office_branch_map');
                    $office_branch_tel = get_field('office_branch_tel');
                    $office_branch_fax = get_field('office_branch_fax');
                    ?>

                    <h3 class="section-border-title section-border-title--narrow mgb-pc--30 mgb-sp--30"><?php the_title();?></h3>

                    <div class="network-area-table-outer">

                        <table class="network-address-table">
                            <tr>
                                <th>住所</th>
                                <td>〒<?php echo $office_branch_code;?>　<?php echo $office_branch_address;?><a href="<?php echo $office_branch_map;?>" class="map-links" target="_blank">MAP</a></td>
                            </tr>
                            <tr>
                                <th>TEL</th>
                                <td><?php echo $office_branch_tel;?></td>
                            </tr>
                            <tr>
                                <th>FAX</th>
                                <td><?php echo $office_branch_fax;?></td>
                            </tr>
                        </table>
                        <!-- [/network-address-table] -->

                    </div>
                    <!-- [/network-area-table-outer] -->

                    <?php if(have_rows('office_post_detail')): ?>

                        <div class="network-area-table-outer">

                            <table class="network-area-table">
                                <thead>
                                    <tr>
                                        <th>事業所</th>
                                        <th colspan="3">住所</th>
                                        <th>TEL</th>
                                        <th>FAX</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while( have_rows('office_post_detail') ): the_row(); ?>
                                        <?php
                                        $office_post_name = get_sub_field('office_post_name');
                                        $office_post_code = get_sub_field('office_post_code');
                                        $office_post_address = get_sub_field('office_post_address');
                                        $office_post_map = get_sub_field('office_post_map');
                                        $office_post_tel = get_sub_field('office_post_tel');
                                        $office_post_fax = get_sub_field('office_post_fax');
                                        ?>

                                        <tr>
                                            <th><?php echo $office_post_name;?></th>
                                            <td class="network-area-table__border">〒<?php echo $office_post_code;?></td>
                                            <td><?php echo $office_post_address;?></td>
                                            <td><a href="<?php echo $office_post_map;?>" class="map-links" target="_blank">MAP</a></td>
                                            <td class="network-area-table__border network-area-table__center"><?php echo $office_post_tel;?></td>
                                            <td class="network-area-table__border network-area-table__center"><?php echo $office_post_fax;?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>

                            </table>
                            <!-- [/network-area-table] -->

                        </div>
                        <!-- [/network-area-table-outer] -->

                    <?php endif; ?>


                </section>
                <!-- [/section] -->

            <?php endwhile; wp_reset_postdata(); ?>


            <?php
            $args = array(
                'post_type' => 'office_post',
                'page_id' => 1384
            );

            $the_query = new WP_Query( $args );
            ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <section id="anchor-office1" class="section mgb-pc--50 mgb-sp--30">

                    <?php
                    $office_branch_code = get_field('office_branch_code');
                    $office_branch_address = get_field('office_branch_address');
                    $office_branch_map = get_field('office_branch_map');
                    $office_branch_tel = get_field('office_branch_tel');
                    $office_branch_fax = get_field('office_branch_fax');
                    ?>

                    <h3 class="section-border-title section-border-title--narrow mgb-pc--30 mgb-sp--30"><?php the_title();?></h3>

                    <section class="section">

                        <h3 class="title-bg-border mgb-pc--20 mgb-sp--20 js-fadein js-fadein--content">北海道支社</h3>

                        <div class="network-area-table-outer">

                            <table class="network-address-table">
                                <tr>
                                    <th>住所</th>
                                    <td>〒<?php echo $office_branch_code;?>　<?php echo $office_branch_address;?><a href="<?php echo $office_branch_map;?>" class="map-links" target="_blank">MAP</a></td>
                                </tr>
                                <tr>
                                    <th>TEL</th>
                                    <td><?php echo $office_branch_tel;?></td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td><?php echo $office_branch_fax;?></td>
                                </tr>
                            </table>
                            <!-- [/network-address-table] -->

                        </div>

                        <?php if(have_rows('office_post_detail')): ?>

                            <div class="network-area-table-outer">

                                <table class="network-area-table">
                                    <thead>
                                        <tr>
                                            <th>事業所</th>
                                            <th colspan="3">住所</th>
                                            <th>TEL</th>
                                            <th>FAX</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if(have_rows('office_post_detail')): ?>
                                            <?php while( have_rows('office_post_detail') ): the_row(); ?>
                                                <?php
                                                $office_post_name = get_sub_field('office_post_name');
                                                $office_post_code = get_sub_field('office_post_code');
                                                $office_post_address = get_sub_field('office_post_address');
                                                $office_post_map = get_sub_field('office_post_map');
                                                $office_post_tel = get_sub_field('office_post_tel');
                                                $office_post_fax = get_sub_field('office_post_fax');
                                                ?>

                                                <tr>
                                                    <th><?php echo $office_post_name;?></th>
                                                    <td class="network-area-table__border">〒<?php echo $office_post_code;?></td>
                                                    <td><?php echo $office_post_address;?></td>
                                                    <td><a href="<?php echo $office_post_map;?>" class="map-links" target="_blank">MAP</a></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_tel;?></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_fax;?></td>
                                                </tr>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </tbody>

                                </table>
                                <!-- [/network-area-table] -->

                            </div>
                            <!-- [/network-area-table-outer] -->

                        <?php endif; ?>

                    </section>
                    <!-- [/section] -->

                </section>
                <!-- [/section] -->

            <?php endwhile; wp_reset_postdata(); ?>


            <?php
            $args = array(
                'post_type' => 'office_post',
                'page_id' => 1385
            );

            $the_query = new WP_Query( $args );
            ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <section id="anchor-office2" class="section mgb-pc--50 mgb-sp--30">

                    <?php
                    $office_branch_code = get_field('office_branch_code');
                    $office_branch_address = get_field('office_branch_address');
                    $office_branch_map = get_field('office_branch_map');
                    $office_branch_tel = get_field('office_branch_tel');
                    $office_branch_fax = get_field('office_branch_fax');
                    ?>

                    <h3 class="section-border-title section-border-title--narrow mgb-pc--30 mgb-sp--30"><?php the_title();?></h3>

                    <section class="section">

                        <h3 class="title-bg-border mgb-pc--20 mgb-sp--20 js-fadein js-fadein--content">東北支社</h3>

                        <div class="network-area-table-outer">

                            <table class="network-address-table">
                                <tr>
                                    <th>住所</th>
                                    <td>〒<?php echo $office_branch_code;?>　<?php echo $office_branch_address;?><a href="<?php echo $office_branch_map;?>" class="map-links" target="_blank">MAP</a></td>
                                </tr>
                                <tr>
                                    <th>TEL</th>
                                    <td><?php echo $office_branch_tel;?></td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td><?php echo $office_branch_fax;?></td>
                                </tr>
                            </table>
                            <!-- [/network-address-table] -->

                        </div>

                        <?php if(have_rows('office_post_detail')): ?>

                            <div class="network-area-table-outer">

                                <table class="network-area-table">
                                    <thead>
                                        <tr>
                                            <th>事業所</th>
                                            <th colspan="3">住所</th>
                                            <th>TEL</th>
                                            <th>FAX</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if(have_rows('office_post_detail')): ?>
                                            <?php while( have_rows('office_post_detail') ): the_row(); ?>
                                                <?php
                                                $office_post_name = get_sub_field('office_post_name');
                                                $office_post_code = get_sub_field('office_post_code');
                                                $office_post_address = get_sub_field('office_post_address');
                                                $office_post_map = get_sub_field('office_post_map');
                                                $office_post_tel = get_sub_field('office_post_tel');
                                                $office_post_fax = get_sub_field('office_post_fax');
                                                ?>

                                                <tr>
                                                    <th><?php echo $office_post_name;?></th>
                                                    <td class="network-area-table__border">〒<?php echo $office_post_code;?></td>
                                                    <td><?php echo $office_post_address;?></td>
                                                    <td><a href="<?php echo $office_post_map;?>" class="map-links" target="_blank">MAP</a></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_tel;?></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_fax;?></td>
                                                </tr>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </tbody>

                                </table>
                                <!-- [/network-area-table] -->

                            </div>
                            <!-- [/network-area-table-outer] -->

                        <?php endif; ?>

                    </section>
                    <!-- [/section] -->

                </section>
                <!-- [/section] -->

            <?php endwhile; wp_reset_postdata(); ?>

            <section id="anchor-office3" class="section mgb-pc--50 mgb-sp--30">

                <h3 class="section-border-title section-border-title--narrow mgb-pc--30 mgb-sp--30">関東エリア</h3>

                <?php
                $args = array(
                    'post_type' => 'office_post',
                    'page_id' => 1386
                );

                $the_query = new WP_Query( $args );
                ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <section class="section mgb-pc--50 mgb-sp--30">

                        <?php
                        $office_branch_code = get_field('office_branch_code');
                        $office_branch_address = get_field('office_branch_address');
                        $office_branch_map = get_field('office_branch_map');
                        $office_branch_tel = get_field('office_branch_tel');
                        $office_branch_fax = get_field('office_branch_fax');
                        ?>

                        <h3 class="title-bg-border mgb-pc--20 mgb-sp--20 js-fadein js-fadein--content"><?php the_title();?></h3>

                        <div class="network-area-table-outer">

                            <table class="network-address-table">
                                <tr>
                                    <th>住所</th>
                                    <td>〒<?php echo $office_branch_code;?>　<?php echo $office_branch_address;?><a href="<?php echo $office_branch_map;?>" class="map-links" target="_blank">MAP</a></td>
                                </tr>
                                <tr>
                                    <th>TEL</th>
                                    <td><?php echo $office_branch_tel;?></td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td><?php echo $office_branch_fax;?></td>
                                </tr>
                            </table>
                            <!-- [/network-address-table] -->

                        </div>

                        <?php if(have_rows('office_post_detail')): ?>

                            <div class="network-area-table-outer">

                                <table class="network-area-table">
                                    <thead>
                                        <tr>
                                            <th>事業所</th>
                                            <th colspan="3">住所</th>
                                            <th>TEL</th>
                                            <th>FAX</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if(have_rows('office_post_detail')): ?>
                                            <?php while( have_rows('office_post_detail') ): the_row(); ?>
                                                <?php
                                                $office_post_name = get_sub_field('office_post_name');
                                                $office_post_code = get_sub_field('office_post_code');
                                                $office_post_address = get_sub_field('office_post_address');
                                                $office_post_map = get_sub_field('office_post_map');
                                                $office_post_tel = get_sub_field('office_post_tel');
                                                $office_post_fax = get_sub_field('office_post_fax');
                                                ?>

                                                <tr>
                                                    <th><?php echo $office_post_name;?></th>
                                                    <td class="network-area-table__border">〒<?php echo $office_post_code;?></td>
                                                    <td><?php echo $office_post_address;?></td>
                                                    <td><a href="<?php echo $office_post_map;?>" class="map-links" target="_blank">MAP</a></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_tel;?></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_fax;?></td>
                                                </tr>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </tbody>

                                </table>
                                <!-- [/network-area-table] -->

                            </div>
                            <!-- [/network-area-table-outer] -->

                        <?php endif; ?>

                    </section>
                    <!-- [/section] -->

                <?php endwhile; wp_reset_postdata(); ?>


                <?php
                $args = array(
                    'post_type' => 'office_post',
                    'page_id' => 1387
                );

                $the_query = new WP_Query( $args );
                ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <section class="section mgb-pc--50 mgb-sp--30">
						
                        <?php
                        $office_branch_code = get_field('office_branch_code');
                        $office_branch_address = get_field('office_branch_address');
                        $office_branch_map = get_field('office_branch_map');
                        $office_branch_tel = get_field('office_branch_tel');
                        $office_branch_fax = get_field('office_branch_fax');
                        ?>

                        <h3 id="anchor-office11" class="title-bg-border mgb-pc--20 mgb-sp--20 js-fadein js-fadein--content"><?php the_title();?></h3>

                        <div class="network-area-table-outer">

                            <table class="network-address-table">
                                <tr>
                                    <th>住所</th>
                                    <td>〒<?php echo $office_branch_code;?>　<?php echo $office_branch_address;?><a href="<?php echo $office_branch_map;?>" class="map-links" target="_blank">MAP</a></td>
                                </tr>
                                <tr>
                                    <th>TEL</th>
                                    <td><?php echo $office_branch_tel;?></td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td><?php echo $office_branch_fax;?></td>
                                </tr>
                            </table>
                            <!-- [/network-address-table] -->

                        </div>

                        <?php if(have_rows('office_post_detail')): ?>

                            <div class="network-area-table-outer">

                                <table class="network-area-table">
                                    <thead>
                                        <tr>
                                            <th>事業所</th>
                                            <th colspan="3">住所</th>
                                            <th>TEL</th>
                                            <th>FAX</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if(have_rows('office_post_detail')): ?>
                                            <?php while( have_rows('office_post_detail') ): the_row(); ?>
                                                <?php
                                                $office_post_name = get_sub_field('office_post_name');
                                                $office_post_code = get_sub_field('office_post_code');
                                                $office_post_address = get_sub_field('office_post_address');
                                                $office_post_map = get_sub_field('office_post_map');
                                                $office_post_tel = get_sub_field('office_post_tel');
                                                $office_post_fax = get_sub_field('office_post_fax');
                                                ?>

                                                <tr>
                                                    <th><?php echo $office_post_name;?></th>
                                                    <td class="network-area-table__border">〒<?php echo $office_post_code;?></td>
                                                    <td><?php echo $office_post_address;?></td>
                                                    <td><a href="<?php echo $office_post_map;?>" class="map-links" target="_blank">MAP</a></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_tel;?></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_fax;?></td>
                                                </tr>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </tbody>

                                </table>
                                <!-- [/network-area-table] -->

                            </div>
                            <!-- [/network-area-table-outer] -->

                        <?php endif; ?>

                    </section>
                    <!-- [/section] -->

                <?php endwhile; wp_reset_postdata(); ?>


                <?php
                $args = array(
                    'post_type' => 'office_post',
                    'page_id' => 1389
                );

                $the_query = new WP_Query( $args );
                ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <section class="section mgb-pc--50 mgb-sp--30">

                        <?php
                        $office_branch_code = get_field('office_branch_code');
                        $office_branch_address = get_field('office_branch_address');
                        $office_branch_map = get_field('office_branch_map');
                        $office_branch_tel = get_field('office_branch_tel');
                        $office_branch_fax = get_field('office_branch_fax');
                        ?>

                        <h3 id="anchor-office12" class="title-bg-border mgb-pc--20 mgb-sp--20 js-fadein js-fadein--content"><?php the_title();?></h3>

                        <div class="network-area-table-outer">

                            <table class="network-address-table">
                                <tr>
                                    <th>住所</th>
                                    <td>〒<?php echo $office_branch_code;?>　<?php echo $office_branch_address;?><a href="<?php echo $office_branch_map;?>" class="map-links" target="_blank">MAP</a></td>
                                </tr>
                                <tr>
                                    <th>TEL</th>
                                    <td><?php echo $office_branch_tel;?></td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td><?php echo $office_branch_fax;?></td>
                                </tr>
                            </table>
                            <!-- [/network-address-table] -->

                        </div>

                        <?php if(have_rows('office_post_detail')): ?>

                            <div class="network-area-table-outer">

                                <table class="network-area-table">
                                    <thead>
                                        <tr>
                                            <th>事業所</th>
                                            <th colspan="3">住所</th>
                                            <th>TEL</th>
                                            <th>FAX</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if(have_rows('office_post_detail')): ?>
                                            <?php while( have_rows('office_post_detail') ): the_row(); ?>
                                                <?php
                                                $office_post_name = get_sub_field('office_post_name');
                                                $office_post_code = get_sub_field('office_post_code');
                                                $office_post_address = get_sub_field('office_post_address');
                                                $office_post_map = get_sub_field('office_post_map');
                                                $office_post_tel = get_sub_field('office_post_tel');
                                                $office_post_fax = get_sub_field('office_post_fax');
                                                ?>

                                                <tr>
                                                    <th><?php echo $office_post_name;?></th>
                                                    <td class="network-area-table__border">〒<?php echo $office_post_code;?></td>
                                                    <td><?php echo $office_post_address;?></td>
                                                    <td><a href="<?php echo $office_post_map;?>" class="map-links" target="_blank">MAP</a></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_tel;?></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_fax;?></td>
                                                </tr>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </tbody>

                                </table>
                                <!-- [/network-area-table] -->

                            </div>
                            <!-- [/network-area-table-outer] -->

                        <?php endif; ?>

                    </section>
                    <!-- [/section] -->

                <?php endwhile; wp_reset_postdata(); ?>

                <?php
                $args = array(
                    'post_type' => 'office_post',
                    'page_id' => 2750
                );

                $the_query = new WP_Query( $args );
                ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <section class="section mgb-pc--50 mgb-sp--30">

                        <?php
                        $office_branch_code = get_field('office_branch_code');
                        $office_branch_address = get_field('office_branch_address');
                        $office_branch_map = get_field('office_branch_map');
                        $office_branch_tel = get_field('office_branch_tel');
                        $office_branch_fax = get_field('office_branch_fax');
                        ?>

                        <h3 id="anchor-office13" class="title-bg-border mgb-pc--20 mgb-sp--20 js-fadein js-fadein--content"><?php the_title();?></h3>

                        <div class="network-area-table-outer">

                            <table class="network-address-table">
                                <tr>
                                    <th>住所</th>
                                    <td>〒<?php echo $office_branch_code;?>　<?php echo $office_branch_address;?><a href="<?php echo $office_branch_map;?>" class="map-links" target="_blank">MAP</a></td>
                                </tr>
                                <tr>
                                    <th>TEL</th>
                                    <td><?php echo $office_branch_tel;?></td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td><?php echo $office_branch_fax;?></td>
                                </tr>
                            </table>
                            <!-- [/network-address-table] -->

                        </div>

                        <?php if(have_rows('office_post_detail')): ?>

                            <div class="network-area-table-outer">

                                <table class="network-area-table">
                                    <thead>
                                        <tr>
                                            <th>事業所</th>
                                            <th colspan="3">住所</th>
                                            <th>TEL</th>
                                            <th>FAX</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if(have_rows('office_post_detail')): ?>
                                            <?php while( have_rows('office_post_detail') ): the_row(); ?>
                                                <?php
                                                $office_post_name = get_sub_field('office_post_name');
                                                $office_post_code = get_sub_field('office_post_code');
                                                $office_post_address = get_sub_field('office_post_address');
                                                $office_post_map = get_sub_field('office_post_map');
                                                $office_post_tel = get_sub_field('office_post_tel');
                                                $office_post_fax = get_sub_field('office_post_fax');
                                                ?>

                                                <tr>
                                                    <th><?php echo $office_post_name;?></th>
                                                    <td class="network-area-table__border">〒<?php echo $office_post_code;?></td>
                                                    <td><?php echo $office_post_address;?></td>
                                                    <td><a href="<?php echo $office_post_map;?>" class="map-links" target="_blank">MAP</a></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_tel;?></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_fax;?></td>
                                                </tr>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </tbody>

                                </table>
                                <!-- [/network-area-table] -->

                            </div>
                            <!-- [/network-area-table-outer] -->

                        <?php endif; ?>

                    </section>
                    <!-- [/section] -->

                <?php endwhile; wp_reset_postdata(); ?>

            </section>
            <!-- [/section] -->

            <?php
            $args = array(
                'post_type' => 'office_post',
                'page_id' => 1390
            );

            $the_query = new WP_Query( $args );
            ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <section id="anchor-office4" class="section mgb-pc--50 mgb-sp--30">

                    <h3 class="section-border-title section-border-title--narrow mgb-pc--30 mgb-sp--30">北信越エリア</h3>

                    <section class="section">

                        <?php
                        $office_branch_code = get_field('office_branch_code');
                        $office_branch_address = get_field('office_branch_address');
                        $office_branch_map = get_field('office_branch_map');
                        $office_branch_tel = get_field('office_branch_tel');
                        $office_branch_fax = get_field('office_branch_fax');
                        ?>

                        <h3 class="title-bg-border mgb-pc--20 mgb-sp--20 js-fadein js-fadein--content"><?php the_title();?></h3>

                        <div class="network-area-table-outer">

                            <table class="network-address-table">
                                <tr>
                                    <th>住所</th>
                                    <td>〒<?php echo $office_branch_code;?>　<?php echo $office_branch_address;?><a href="<?php echo $office_branch_map;?>" class="map-links" target="_blank">MAP</a></td>
                                </tr>
                                <tr>
                                    <th>TEL</th>
                                    <td><?php echo $office_branch_tel;?></td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td><?php echo $office_branch_fax;?></td>
                                </tr>
                            </table>
                            <!-- [/network-address-table] -->

                        </div>

                        <?php if(have_rows('office_post_detail')): ?>

                            <div class="network-area-table-outer">

                                <table class="network-area-table">
                                    <thead>
                                        <tr>
                                            <th>事業所</th>
                                            <th colspan="3">住所</th>
                                            <th>TEL</th>
                                            <th>FAX</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while( have_rows('office_post_detail') ): the_row(); ?>
                                            <?php
                                            $office_post_name = get_sub_field('office_post_name');
                                            $office_post_code = get_sub_field('office_post_code');
                                            $office_post_address = get_sub_field('office_post_address');
                                            $office_post_map = get_sub_field('office_post_map');
                                            $office_post_tel = get_sub_field('office_post_tel');
                                            $office_post_fax = get_sub_field('office_post_fax');
                                            ?>

                                            <tr>
                                                <th><?php echo $office_post_name;?></th>
                                                <td class="network-area-table__border">〒<?php echo $office_post_code;?></td>
                                                <td><?php echo $office_post_address;?></td>
                                                <td><a href="<?php echo $office_post_map;?>" class="map-links" target="_blank">MAP</a></td>
                                                <td class="network-area-table__border network-area-table__center"><?php echo $office_post_tel;?></td>
                                                <td class="network-area-table__border network-area-table__center"><?php echo $office_post_fax;?></td>
                                            </tr>

                                        <?php endwhile; ?>
                                    </tbody>

                                </table>
                                <!-- [/network-area-table] -->

                            </div>
                            <!-- [/network-area-table-outer] -->

                        <?php endif; ?>

                    </section>
                    <!-- [/section] -->

                </section>
                <!-- [/section] -->

            <?php endwhile; wp_reset_postdata(); ?>

            <?php
            $args = array(
                'post_type' => 'office_post',
                'page_id' => 1391
            );

            $the_query = new WP_Query( $args );
            ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <section id="anchor-office5" class="section mgb-pc--50 mgb-sp--30">

                    <h3 class="section-border-title section-border-title--narrow mgb-pc--30 mgb-sp--30">中部エリア</h3>

                    <section class="section">

                        <?php
                        $office_branch_code = get_field('office_branch_code');
                        $office_branch_address = get_field('office_branch_address');
                        $office_branch_map = get_field('office_branch_map');
                        $office_branch_tel = get_field('office_branch_tel');
                        $office_branch_fax = get_field('office_branch_fax');
                        ?>

                        <h3 class="title-bg-border mgb-pc--20 mgb-sp--20 js-fadein js-fadein--content"><?php the_title();?></h3>

                        <div class="network-area-table-outer">

                            <table class="network-address-table">
                                <tr>
                                    <th>住所</th>
                                    <td>〒<?php echo $office_branch_code;?>　<?php echo $office_branch_address;?><a href="<?php echo $office_branch_map;?>" class="map-links" target="_blank">MAP</a></td>
                                </tr>
                                <tr>
                                    <th>TEL</th>
                                    <td><?php echo $office_branch_tel;?></td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td><?php echo $office_branch_fax;?></td>
                                </tr>
                            </table>
                            <!-- [/network-address-table] -->

                        </div>

                        <?php if(have_rows('office_post_detail')): ?>

                            <div class="network-area-table-outer">

                                <table class="network-area-table">
                                    <thead>
                                        <tr>
                                            <th>事業所</th>
                                            <th colspan="3">住所</th>
                                            <th>TEL</th>
                                            <th>FAX</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if(have_rows('office_post_detail')): ?>
                                            <?php while( have_rows('office_post_detail') ): the_row(); ?>
                                                <?php
                                                $office_post_name = get_sub_field('office_post_name');
                                                $office_post_code = get_sub_field('office_post_code');
                                                $office_post_address = get_sub_field('office_post_address');
                                                $office_post_map = get_sub_field('office_post_map');
                                                $office_post_tel = get_sub_field('office_post_tel');
                                                $office_post_fax = get_sub_field('office_post_fax');
                                                ?>

                                                <tr>
                                                    <th><?php echo $office_post_name;?></th>
                                                    <td class="network-area-table__border">〒<?php echo $office_post_code;?></td>
                                                    <td><?php echo $office_post_address;?></td>
                                                    <td><a href="<?php echo $office_post_map;?>" class="map-links" target="_blank">MAP</a></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_tel;?></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_fax;?></td>
                                                </tr>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </tbody>

                                </table>
                                <!-- [/network-area-table] -->

                            </div>
                            <!-- [/network-area-table-outer] -->

                        <?php endif; ?>

                    </section>
                    <!-- [/section] -->

                </section>
                <!-- [/section] -->

            <?php endwhile; wp_reset_postdata(); ?>

            <?php
            $args = array(
                'post_type' => 'office_post',
                'page_id' => 1392
            );

            $the_query = new WP_Query( $args );
            ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <section id="anchor-office6" class="section mgb-pc--50 mgb-sp--30">

                    <h3 class="section-border-title section-border-title--narrow mgb-pc--30 mgb-sp--30">関西エリア</h3>

                    <section class="section">

                        <?php
                        $office_branch_code = get_field('office_branch_code');
                        $office_branch_address = get_field('office_branch_address');
                        $office_branch_map = get_field('office_branch_map');
                        $office_branch_tel = get_field('office_branch_tel');
                        $office_branch_fax = get_field('office_branch_fax');
                        ?>

                        <h3 class="title-bg-border mgb-pc--20 mgb-sp--20 js-fadein js-fadein--content"><?php the_title();?></h3>

                        <div class="network-area-table-outer">

                            <table class="network-address-table">
                                <tr>
                                    <th>住所</th>
                                    <td>〒<?php echo $office_branch_code;?>　<?php echo $office_branch_address;?><a href="<?php echo $office_branch_map;?>" class="map-links" target="_blank">MAP</a></td>
                                </tr>
                                <tr>
                                    <th>TEL</th>
                                    <td><?php echo $office_branch_tel;?></td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td><?php echo $office_branch_fax;?></td>
                                </tr>
                            </table>
                            <!-- [/network-address-table] -->

                        </div>

                        <?php if(have_rows('office_post_detail')): ?>

                            <div class="network-area-table-outer">

                                <table class="network-area-table">
                                    <thead>
                                        <tr>
                                            <th>事業所</th>
                                            <th colspan="3">住所</th>
                                            <th>TEL</th>
                                            <th>FAX</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if(have_rows('office_post_detail')): ?>
                                            <?php while( have_rows('office_post_detail') ): the_row(); ?>
                                                <?php
                                                $office_post_name = get_sub_field('office_post_name');
                                                $office_post_code = get_sub_field('office_post_code');
                                                $office_post_address = get_sub_field('office_post_address');
                                                $office_post_map = get_sub_field('office_post_map');
                                                $office_post_tel = get_sub_field('office_post_tel');
                                                $office_post_fax = get_sub_field('office_post_fax');
                                                ?>

                                                <tr>
                                                    <th><?php echo $office_post_name;?></th>
                                                    <td class="network-area-table__border">〒<?php echo $office_post_code;?></td>
                                                    <td><?php echo $office_post_address;?></td>
                                                    <td><a href="<?php echo $office_post_map;?>" class="map-links" target="_blank">MAP</a></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_tel;?></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_fax;?></td>
                                                </tr>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </tbody>

                                </table>
                                <!-- [/network-area-table] -->

                            </div>
                            <!-- [/network-area-table-outer] -->

                        <?php endif; ?>

                    </section>
                    <!-- [/section] -->

                </section>
                <!-- [/section] -->

            <?php endwhile; wp_reset_postdata(); ?>

            <?php
            $args = array(
                'post_type' => 'office_post',
                'page_id' => 1393
            );

            $the_query = new WP_Query( $args );
            ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <section id="anchor-office7" class="section mgb-pc--50 mgb-sp--30">

                    <h3 class="section-border-title section-border-title--narrow mgb-pc--30 mgb-sp--30">中国エリア</h3>

                    <section class="section">

                        <?php
                        $office_branch_code = get_field('office_branch_code');
                        $office_branch_address = get_field('office_branch_address');
                        $office_branch_map = get_field('office_branch_map');
                        $office_branch_tel = get_field('office_branch_tel');
                        $office_branch_fax = get_field('office_branch_fax');
                        ?>

                        <h3 class="title-bg-border mgb-pc--20 mgb-sp--20 js-fadein js-fadein--content"><?php the_title();?></h3>

                        <div class="network-area-table-outer">

                            <table class="network-address-table">
                                <tr>
                                    <th>住所</th>
                                    <td>〒<?php echo $office_branch_code;?>　<?php echo $office_branch_address;?><a href="<?php echo $office_branch_map;?>" class="map-links" target="_blank">MAP</a></td>
                                </tr>
                                <tr>
                                    <th>TEL</th>
                                    <td><?php echo $office_branch_tel;?></td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td><?php echo $office_branch_fax;?></td>
                                </tr>
                            </table>
                            <!-- [/network-address-table] -->

                        </div>

                        <?php if(have_rows('office_post_detail')): ?>

                            <div class="network-area-table-outer">

                                <table class="network-area-table">
                                    <thead>
                                        <tr>
                                            <th>事業所</th>
                                            <th colspan="3">住所</th>
                                            <th>TEL</th>
                                            <th>FAX</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if(have_rows('office_post_detail')): ?>
                                            <?php while( have_rows('office_post_detail') ): the_row(); ?>
                                                <?php
                                                $office_post_name = get_sub_field('office_post_name');
                                                $office_post_code = get_sub_field('office_post_code');
                                                $office_post_address = get_sub_field('office_post_address');
                                                $office_post_map = get_sub_field('office_post_map');
                                                $office_post_tel = get_sub_field('office_post_tel');
                                                $office_post_fax = get_sub_field('office_post_fax');
                                                ?>

                                                <tr>
                                                    <th><?php echo $office_post_name;?></th>
                                                    <td class="network-area-table__border">〒<?php echo $office_post_code;?></td>
                                                    <td><?php echo $office_post_address;?></td>
                                                    <td><a href="<?php echo $office_post_map;?>" class="map-links" target="_blank">MAP</a></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_tel;?></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_fax;?></td>
                                                </tr>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </tbody>

                                </table>
                                <!-- [/network-area-table] -->

                            </div>
                            <!-- [/network-area-table-outer] -->

                        <?php endif; ?>

                    </section>
                    <!-- [/section] -->

                </section>
                <!-- [/section] -->

            <?php endwhile; wp_reset_postdata(); ?>


            <?php
            $args = array(
                'post_type' => 'office_post',
                'page_id' => 1394
            );

            $the_query = new WP_Query( $args );
            ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <section id="anchor-office8" class="section mgb-pc--50 mgb-sp--30">

                    <h3 class="section-border-title section-border-title--narrow mgb-pc--30 mgb-sp--30">四国エリア</h3>

                    <section class="section">

                        <?php
                        $office_branch_code = get_field('office_branch_code');
                        $office_branch_address = get_field('office_branch_address');
                        $office_branch_map = get_field('office_branch_map');
                        $office_branch_tel = get_field('office_branch_tel');
                        $office_branch_fax = get_field('office_branch_fax');
                        ?>

                        <h3 class="title-bg-border mgb-pc--20 mgb-sp--20 js-fadein js-fadein--content"><?php the_title();?></h3>

                        <div class="network-area-table-outer">

                            <table class="network-address-table">
                                <tr>
                                    <th>住所</th>
                                    <td>〒<?php echo $office_branch_code;?>　<?php echo $office_branch_address;?><a href="<?php echo $office_branch_map;?>" class="map-links" target="_blank">MAP</a></td>
                                </tr>
                                <tr>
                                    <th>TEL</th>
                                    <td><?php echo $office_branch_tel;?></td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td><?php echo $office_branch_fax;?></td>
                                </tr>
                            </table>
                            <!-- [/network-address-table] -->

                        </div>

                        <?php if(have_rows('office_post_detail')): ?>

                            <div class="network-area-table-outer">

                                <table class="network-area-table">
                                    <thead>
                                        <tr>
                                            <th>事業所</th>
                                            <th colspan="3">住所</th>
                                            <th>TEL</th>
                                            <th>FAX</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if(have_rows('office_post_detail')): ?>
                                            <?php while( have_rows('office_post_detail') ): the_row(); ?>
                                                <?php
                                                $office_post_name = get_sub_field('office_post_name');
                                                $office_post_code = get_sub_field('office_post_code');
                                                $office_post_address = get_sub_field('office_post_address');
                                                $office_post_map = get_sub_field('office_post_map');
                                                $office_post_tel = get_sub_field('office_post_tel');
                                                $office_post_fax = get_sub_field('office_post_fax');
                                                ?>

                                                <tr>
                                                    <th><?php echo $office_post_name;?></th>
                                                    <td class="network-area-table__border">〒<?php echo $office_post_code;?></td>
                                                    <td><?php echo $office_post_address;?></td>
                                                    <td><a href="<?php echo $office_post_map;?>" class="map-links" target="_blank">MAP</a></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_tel;?></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_fax;?></td>
                                                </tr>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </tbody>

                                </table>
                                <!-- [/network-area-table] -->

                            </div>
                            <!-- [/network-area-table-outer] -->

                        <?php endif; ?>

                    </section>
                    <!-- [/section] -->

                </section>
                <!-- [/section] -->

            <?php endwhile; wp_reset_postdata(); ?>


            <?php
            $args = array(
                'post_type' => 'office_post',
                'page_id' => 1395
            );

            $the_query = new WP_Query( $args );
            ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <section id="anchor-office9" class="section mgb-pc--50 mgb-sp--30">

                    <h3 class="section-border-title section-border-title--narrow mgb-pc--30 mgb-sp--30">九州エリア</h3>

                    <section class="section">

                        <?php
                        $office_branch_code = get_field('office_branch_code');
                        $office_branch_address = get_field('office_branch_address');
                        $office_branch_map = get_field('office_branch_map');
                        $office_branch_tel = get_field('office_branch_tel');
                        $office_branch_fax = get_field('office_branch_fax');
                        ?>

                        <h3 class="title-bg-border mgb-pc--20 mgb-sp--20 js-fadein js-fadein--content"><?php the_title();?></h3>

                        <div class="network-area-table-outer">

                            <table class="network-address-table">
                                <tr>
                                    <th>住所</th>
                                    <td>〒<?php echo $office_branch_code;?>　<?php echo $office_branch_address;?><a href="<?php echo $office_branch_map;?>" class="map-links" target="_blank">MAP</a></td>
                                </tr>
                                <tr>
                                    <th>TEL</th>
                                    <td><?php echo $office_branch_tel;?></td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td><?php echo $office_branch_fax;?></td>
                                </tr>
                            </table>
                            <!-- [/network-address-table] -->

                        </div>

                        <?php if(have_rows('office_post_detail')): ?>

                            <div class="network-area-table-outer">

                                <table class="network-area-table">
                                    <thead>
                                        <tr>
                                            <th>事業所</th>
                                            <th colspan="3">住所</th>
                                            <th>TEL</th>
                                            <th>FAX</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if(have_rows('office_post_detail')): ?>
                                            <?php while( have_rows('office_post_detail') ): the_row(); ?>
                                                <?php
                                                $office_post_name = get_sub_field('office_post_name');
                                                $office_post_code = get_sub_field('office_post_code');
                                                $office_post_address = get_sub_field('office_post_address');
                                                $office_post_map = get_sub_field('office_post_map');
                                                $office_post_tel = get_sub_field('office_post_tel');
                                                $office_post_fax = get_sub_field('office_post_fax');
                                                ?>

                                                <tr>
                                                    <th><?php echo $office_post_name;?></th>
                                                    <td class="network-area-table__border">〒<?php echo $office_post_code;?></td>
                                                    <td><?php echo $office_post_address;?></td>
                                                    <td><a href="<?php echo $office_post_map;?>" class="map-links" target="_blank">MAP</a></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_tel;?></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_fax;?></td>
                                                </tr>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </tbody>

                                </table>
                                <!-- [/network-area-table] -->

                            </div>
                            <!-- [/network-area-table-outer] -->

                        <?php endif; ?>

                    </section>
                    <!-- [/section] -->

                </section>
                <!-- [/section] -->

            <?php endwhile; wp_reset_postdata(); ?>

                <?php
                $args = array(
                    'post_type' => 'office_post',
                    'page_id' => 5441
                );

                $the_query = new WP_Query( $args );
                ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <section class="section mgb-pc--50 mgb-sp--30">
						
                        <?php
                        $office_branch_code = get_field('office_branch_code');
                        $office_branch_address = get_field('office_branch_address');
                        $office_branch_map = get_field('office_branch_map');
                        $office_branch_tel = get_field('office_branch_tel');
                        $office_branch_fax = get_field('office_branch_fax');
                        ?>

                        <h3 id="anchor-office14" class="title-bg-border mgb-pc--20 mgb-sp--20 js-fadein js-fadein--content"><?php the_title();?></h3>

                        <div class="network-area-table-outer">

                            <table class="network-address-table">
                                <tr>
                                    <th>住所</th>
                                    <td>〒<?php echo $office_branch_code;?>　<?php echo $office_branch_address;?><a href="<?php echo $office_branch_map;?>" class="map-links" target="_blank">MAP</a></td>
                                </tr>
                                <tr>
                                    <th>TEL</th>
                                    <td><?php echo $office_branch_tel;?></td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td><?php echo $office_branch_fax;?></td>
                                </tr>
                            </table>
                            <!-- [/network-address-table] -->

                        </div>

                        <?php if(have_rows('office_post_detail')): ?>

                            <div class="network-area-table-outer">

                                <table class="network-area-table">
                                    <thead>
                                        <tr>
                                            <th>事業所</th>
                                            <th colspan="3">住所</th>
                                            <th>TEL</th>
                                            <th>FAX</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if(have_rows('office_post_detail')): ?>
                                            <?php while( have_rows('office_post_detail') ): the_row(); ?>
                                                <?php
                                                $office_post_name = get_sub_field('office_post_name');
                                                $office_post_code = get_sub_field('office_post_code');
                                                $office_post_address = get_sub_field('office_post_address');
                                                $office_post_map = get_sub_field('office_post_map');
                                                $office_post_tel = get_sub_field('office_post_tel');
                                                $office_post_fax = get_sub_field('office_post_fax');
                                                ?>

                                                <tr>
                                                    <th><?php echo $office_post_name;?></th>
                                                    <td class="network-area-table__border">〒<?php echo $office_post_code;?></td>
                                                    <td><?php echo $office_post_address;?></td>
                                                    <td><a href="<?php echo $office_post_map;?>" class="map-links" target="_blank">MAP</a></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_tel;?></td>
                                                    <td class="network-area-table__border network-area-table__center"><?php echo $office_post_fax;?></td>
                                                </tr>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </tbody>

                                </table>
                                <!-- [/network-area-table] -->

                            </div>
                            <!-- [/network-area-table-outer] -->

                        <?php endif; ?>

                    </section>
                    <!-- [/section] -->

                <?php endwhile; wp_reset_postdata(); ?>			

            <?php
            $args = array(
                'post_type' => 'office_post',
                'page_id' => 1396
            );

            $the_query = new WP_Query( $args );
            ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <section id="anchor-office10" class="section mgb-pc--50 mgb-sp--30">

                    <?php
                    $office_branch_code = get_field('office_branch_code');
                    $office_branch_address = get_field('office_branch_address');
                    $office_branch_map = get_field('office_branch_map');
                    $office_branch_tel = get_field('office_branch_tel');
                    $office_branch_fax = get_field('office_branch_fax');
                    ?>

                    <h3 class="section-border-title section-border-title--narrow mgb-pc--30 mgb-sp--30"><?php the_title();?></h3>

                    <div class="network-area-table-outer">

                        <table class="network-address-table">
                            <tr>
                                <th>住所</th>
                                <td>〒<?php echo $office_branch_code;?>　<?php echo $office_branch_address;?><a href="<?php echo $office_branch_map;?>" class="map-links" target="_blank">MAP</a></td>
                            </tr>
                            <tr>
                                <th>TEL</th>
                                <td><?php echo $office_branch_tel;?></td>
                            </tr>
                            <tr>
                                <th>FAX</th>
                                <td><?php echo $office_branch_fax;?></td>
                            </tr>
                        </table>
                        <!-- [/network-address-table] -->

                    </div>

                    <?php if(have_rows('office_post_detail')): ?>

                        <div class="network-area-table-outer">

                            <table class="network-area-table">
                                <thead>
                                    <tr>
                                        <th>事業所</th>
                                        <th colspan="3">住所</th>
                                        <th>TEL</th>
                                        <th>FAX</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php if(have_rows('office_post_detail')): ?>
                                        <?php while( have_rows('office_post_detail') ): the_row(); ?>
                                            <?php
                                            $office_post_name = get_sub_field('office_post_name');
                                            $office_post_code = get_sub_field('office_post_code');
                                            $office_post_address = get_sub_field('office_post_address');
                                            $office_post_map = get_sub_field('office_post_map');
                                            $office_post_tel = get_sub_field('office_post_tel');
                                            $office_post_fax = get_sub_field('office_post_fax');
                                            ?>

                                            <tr>
                                                <th><?php echo $office_post_name;?></th>
                                                <td class="network-area-table__border">〒<?php echo $office_post_code;?></td>
                                                <td><?php echo $office_post_address;?></td>
                                                <td><a href="<?php echo $office_post_map;?>" class="map-links" target="_blank">MAP</a></td>
                                                <td class="network-area-table__border network-area-table__center"><?php echo $office_post_tel;?></td>
                                                <td class="network-area-table__border network-area-table__center"><?php echo $office_post_fax;?></td>
                                            </tr>

                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </tbody>

                            </table>
                            <!-- [/network-area-table] -->

                        </div>
                        <!-- [/network-area-table-outer] -->

                    <?php endif; ?>


                </section>
                <!-- [/section] -->

            <?php endwhile; wp_reset_postdata(); ?>

        </div>
        <!-- [/container] -->

    </div>
    <!-- [/main] -->

</div>
<!-- [/contents] -->

<?php get_footer(); ?>
