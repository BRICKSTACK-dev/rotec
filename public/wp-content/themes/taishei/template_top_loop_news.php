<?php
$query = array(
'post_type' => 'post',
'orderby'=>'date',
'order'=>'DESC',
'posts_per_page'=>5
);
query_posts($query); ?>
<?php if (have_posts()) : ?>

                                <ul class="news-contents-list">

<?php while (have_posts()):the_post(); ?>
<?php
$cat1 = get_the_terms($post->ID,'category');
$now_cat1 = $cat1[0];
$now_cat1_name = $now_cat1->name;
$now_cat1_slug = $now_cat1->slug;
$now_cat1_id = $now_cat1->term_id;
?>
								    <li class="news-contents-list__item js-fadeup">
                                        <span class="news-contents-list__item-date"><?php echo date("Y.m.d", strtotime($post -> post_date));?></span>

<?php
$taxonomy = 'category';
$cats = get_the_terms($post->ID,'category');
foreach($cats as $cat):
    $now_cat1_name = $cat->name;
    $now_cat1_slug = $cat->slug;
?>
										<a href="<?php echo $now_cat1_slug;?>" class="news-contents-list__item-label"><?php echo $now_cat1_name;?></a>
<?php endforeach;?>

                                        <a href="<?php the_permalink() ?>" class="news-contents-list__item-link"><?php the_title();?></a>
                                    </li>
<?php endwhile; ?>
                                </dl>
                                <!-- [/news-contents-list] -->
<?php endif; ?>
<?php wp_reset_query(); ?>






<dt><?php echo date("Y.m.d", strtotime($post -> post_date));?><span class="un_txtSpan"><?php echo $now_cat1_name;?></span></dt>
<dd><a href="<?php the_permalink() ?>"><?php the_title();?></a><span class="un_newsSpan">NEW</span></dd>