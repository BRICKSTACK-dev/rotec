<?php
$query = array(
'post_type' => 'post',
'orderby'=>'date',
'order'=>'DESC',
'posts_per_page'=>5
);
query_posts($query); ?>
<?php if (have_posts()) : ?>

                                <dl class="un_newsList clearfix">

<?php while (have_posts()):the_post(); ?>
<?php
$cat1 = get_the_terms($post->ID,'category');
$now_cat1 = $cat1[0];
$now_cat1_name = $now_cat1->name;
$now_cat1_slug = $now_cat1->slug;
$now_cat1_id = $now_cat1->term_id;
?>

<?php
$taxonomy = 'category';
$cats = get_the_terms($post->ID,'category');
foreach($cats as $cat):
    $now_cat1_name = $cat->name;
    $now_cat1_slug = $cat->slug;
?>
<?php
$csr_post_new = get_field('csr_post_new');
?>

                                        <?php if ( in_category(array('release')) ) : ?>
                                            <dt><?php echo date("Y.m.d", strtotime($post -> post_date));?><span class="un_txtSpan un_txtSpan01"><?php echo $now_cat1_name;?></span></dt>
                                        <?php else: ?>
                                            <dt><?php echo date("Y.m.d", strtotime($post -> post_date));?><span class="un_txtSpan"><?php echo $now_cat1_name;?></span></dt>
                                        <?php endif; ?>

                                        <dd><a href="<?php the_permalink() ?>"><?php the_title();?></a>

<?php if($csr_post_new):?>
                                            <span class="un_newsSpan">NEW</span>
<?php endif;?>

                                        </dd>

<?php endforeach;?>
<?php endwhile; ?>
                                </dl>
                                <!-- [/un_newsList] -->
<?php endif; ?>
<?php wp_reset_query(); ?>

