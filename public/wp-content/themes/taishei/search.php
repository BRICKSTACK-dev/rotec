<?php get_header(); ?>

<div class="contents mgb-pc--195 mgb-sp--100">

	<div class="main">

		<div class="main-keyvisual main-keyvisual--contact">
			<div class="main-keyvisual__inner">
				<h2 class="main-keyvisual__title">
<?php if ( have_posts() ) : ?>
					<span class="main-keyvisual__title-jp"><?php printf( '<span>' . get_search_query() . '</span>' ); ?></span>
<?php else : ?>
					<span class="main-keyvisual__title-jp"><?php _e( 'Nothing Found' ); ?></span>
<?php endif; ?>

				</h2>
			</div>
		</div>
		<!-- [/main-keyvisual] -->

		<div class="breadcrumb breadcrumb--border">
			<div class="container">
				<ul class="breadcrumb__list">
					<li class="breadcrumb__list-item breadcrumb__list-item--blue"><a href="/">TOP</a></li>
					<li class="breadcrumb__list-item"><?php printf( '<span>' . get_search_query() . '</span>' ); ?>（検索キーワード）</li>
				</ul>
			</div>
		</div>
		<!-- [/breadcrumb] -->

		<div class="container">

			<p class="mod-caption mgb-pc--40 mgb-sp--40">
				'<?php printf( '<span>' . get_search_query() . '</span>' ); ?>（検索キーワード）' についての検索結果です
			</p>
			<!-- [/mod-caption] -->


<?php if (have_posts()) :?>

	<?php while ( have_posts() ) : the_post(); ?>

			<div class="search-page">
				<div class="search-page__block clearfix">
<?php if(!has_post_thumbnail()):

  $first_image = '/<img.*?src=(["\'])(.+?)\1.*?>/i';

  preg_match($first_image, $post->post_content, $image_url);

  $src_url = $image_url[2];
?>
	<?php if($src_url): ?>
					<div class="search-page__block-image">
						<img src="<?php echo $src_url;?>" alt="">
					</div>
	<?php endif; ?>
<?php else : ?>
					<div class="search-page__block-image">
						<?php the_post_thumbnail(); ?>
					</div>
<?php endif; ?>
					<div class="search-page__block-contents">
						<a href="<?php the_permalink() ?>" class="search-page__block-contents-title"><?php the_title();?></a>
						<p class="search-page__block-contents-text"><?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true);?></p>
					</div>
				</div>
				<!-- [/search-page__block] -->
			</div>
			<!-- [/search-page] -->

	<?php endwhile; wp_reset_postdata(); ?>

<?php endif; ?>


		</div>
		<!-- [/container] -->

	</div>
	<!-- [/main] -->

</div>
<!-- [/contents] -->


<?php get_footer();
