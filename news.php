<?php
/*
Template Name: news
*/

get_header();
?>

<?php
$args = array(
    'posts_per_page' => 1,
    'post_type' => array('news','post'),
    'post_status' => 'publish'
);
$posts = get_posts($args);
foreach($posts as $post) :
    setup_postdata($post)
?>

<div class="news">
    <div class="news__wrap inview">
        <?php if(get_the_time('Y.m.d') != get_the_modified_date('Y.m.d')):?>
        <p class="news__date"><?php the_modified_date('Y.m.d') ?></p>
        <?php else: ?>
        <p class="news__date"><?php the_time('Y.m.d') ?></p>
        <?php endif; ?>
        <h3 class="news__ttl"><?php the_title(); ?></h3>
        <div class="news__cont">
            <?php
            the_content();
            ?>
        </div>
    </div>
</div>

<?php
endforeach;
wp_reset_postdata();
?>

<?php get_footer(); ?>