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
					<li class="breadcrumb__list-item breadcrumb__list-item--blue">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a>
					</li>
					<li class="breadcrumb__list-item breadcrumb__list-item--blue">
						<a href="<?php echo esc_url( home_url( '/info/' ) ); ?>">INFORMATION</a>
					</li>
<?php
$cat1 = get_current_term();
$now_cat1_name = $cat1->name;
?>
					<li class="breadcrumb__list-item">
						<p><?php echo $now_cat1_name;?></p>
					</li>
				</ul>
			</div>
		</div>
		<!-- [/breadcrumb] -->

		<div class="container mgt-pc--30 mgt-sp--30 mgb-pc--200 mgb-sp--100">


<?php
    // 出力する内容を設定
    function archiveFunc($year,$cat1){
$now_cat1_slug = $cat1->slug;
        query_posts('&posts_per_page=-1&category_name='.$now_cat1_slug.'&year='.$year.'&order=DSC');
        // category_name=history などスラッグを記入
        //posts_per_page は表示する記事数（-1は無制限）

        if(have_posts()) :
?>
			<section class="section section--info">
				<h3 class="section-border-title mgb-pc--20 mgb-sp--20 js-fadein">
					<?php echo $year; ?>年
				</h3>
				<!-- [/section-border-title] -->

				<div class="info-contents">

					<ul class="info-contents__list js-fadein">
<?php while(have_posts()) : the_post(); ?>
						<li class="info-contents__list-item info-contents__list-item--<?php echo $now_cat1_slug;?>">
							<?php
								$current_cat = get_the_category($post->ID);
								$cat_name = $current_cat[0]->name;
							?>
							<dl class="info-contents__menu">
								<dt class="info-contents__menu-title">
									<p class="info-contents__menu-title-date"><?php echo get_the_date("Y.n.j");?></p>
									<p class="info-contents__menu-title-cate info-contents__menu-title-cate--<?php echo $now_cat1_slug;?>"><?php echo $cat_name;?></p>
								</dt>
								<dd class="info-contents__menu-text">
									<a href="<?php the_permalink();?>" class="info-contents__menu-text-link"><?php the_title();?>
<?php if($csr_post_new):?>
										<span class="info-contents__menu-text-link-new">NEW</span>
<?php endif;?>

									</a>
								</dd>
							</dl>
						</li>
<?php endwhile; ?>
					</ul>
				</div>
				<!-- [/info-contents] -->

			</section>
<?php   endif;
	}

    $thisyear = date('Y'); // 現在の西暦年を取得

    for ($year=$thisyear; $year >= 2000; $year--) {
        // $year >= で指定した年から現在の年までの記事を出力（例では2000年から現在まで）
$cat1 = get_current_term();
        archiveFunc($year,$cat1);
    }

?>
			<!-- [/section] -->

		</div>
		<!-- [/container] -->

	</div>
	<!-- [/main] -->

</div>
<!-- [/contents] -->

<?php get_footer(); ?>