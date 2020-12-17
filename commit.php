<?php
/*
Template Name: commit
*/

get_header();
?>

<div class="commit">
    <div class="breadcrumb-area pc">
        <?php woocommerce_breadcrumb(); ?>
    </div>
    <div class="commit__wrap inview">
        <div class="commit__cont commit__cont--1">
            <p class="commit__thumb">
              <span class="commit__thumb__ico"></span>
              <span class="commit__thumb__txt">こだわり 1</span>
            </p>
            <h3 class="commit__ttl">焼き鳥串へのこだわり</h3>
            <div class="commit__txtbox">
                <p class="commit__txt">厳選した素材を使い、安心、安全を第一に1本1本丁寧に手差しした焼き鳥串を提供しています！</p>
            </div>
            <div class="commit__imgbox">
                <div class="commit__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/commit/commit_1.png" alt="イメージ写真">
                </div>
                <div class="commit__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/commit/commit_2.png" alt="イメージ写真">
                </div>
            </div>
        </div>
        <div class="commit__cont commit__cont--2">
            <p class="commit__thumb">
              <span class="commit__thumb__ico"></span>
              <span class="commit__thumb__ico"></span>
              <span class="commit__thumb__txt">こだわり 2</span>
            </p>
            <h3 class="commit__ttl">炭火焼へのこだわり</h3>
            <div class="commit__txtbox">
                <p class="commit__txt">強めの炭火で一気に焼き上げる焼き鳥、香ばしく、ジューシーに焼きあげた焼き鳥はいががでしょうか。<br>一度ご賞味あれ！</p>
            </div>
            <div class="commit__imgbox">
                <div class="commit__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/commit/commit_3.png" alt="イメージ写真">
                </div>
                <div class="commit__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/commit/commit_4.png" alt="イメージ写真">
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>