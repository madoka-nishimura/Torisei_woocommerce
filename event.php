<?php
/*
Template Name: event
*/

get_header();
?>

<div class="event">
  <div class="event__wrap inview">
      <p class="event__txt">会社、町内会、各種イベント会場へ<br class="sp">出張サービスいたします。<br>ご予算に応じて承りますので<br class="sp">お気軽にお申し付けください。</p>
      <ul class="event__list">
          <li class="event__item">
              <div class="event__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/event/1.png" alt="イメージ写真">
              </div>
              <h3 class="event__name">焼き鳥</h3>
          </li>
          <li class="event__item">
              <div class="event__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/event/2.png" alt="イメージ写真">
              </div>
              <h3 class="event__name">たこ焼き</h3>
          </li>
          <li class="event__item">
              <div class="event__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/event/3.png" alt="イメージ写真">
              </div>
              <h3 class="event__name">広島焼き</h3>
          </li>
          <li class="event__item">
              <div class="event__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/event/4.png" alt="イメージ写真">
              </div>
              <h3 class="event__name">焼きそば</h3>
          </li>
          <li class="event__item">
              <div class="event__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/event/5.png" alt="イメージ写真">
              </div>
              <h3 class="event__name">かき氷</h3>
          </li>
          <li class="event__item">
              <div class="event__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/event/6.png" alt="イメージ写真">
              </div>
              <h3 class="event__name">ベビーカステラ</h3>
          </li>
          <li class="event__item">
              <div class="event__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/event/7.png" alt="イメージ写真">
              </div>
              <h3 class="event__name">スーパーボール</h3>
          </li>
      </ul>
      <div class="event__notes">
          <p class="event__note">※その他、テント設営、音響設営など、
              ご要望に応じます。<br class="pc">尚、パーティー用オードブルもご用意できます。（要予約）</p>
      </div>
  </div>
</div>

<?php get_footer(); ?>