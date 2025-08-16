<?php get_header(); ?>

<main>
  <section id="sub-fv">
    <div class="sub-fv-title">
      <h1 class="sub-fv-title-jp">お知らせ・メディア掲載</h1>
      <h5 class="sub-fv-title-en">News</h5>
    </div>
    <div class="sub-fv-image">
      <img src="<?php echo get_theme_file_uri('images/news/news-fkv-02.jpg'); ?>" alt="Sub page FKV">
    </div>
  </section>
  <section id="news-list">
    <div class="container">
      <div class="news-contents">
        <!-- 新着情報 -->
        <?php
        $args = array(
            'post_type' => 'news',
            'posts_per_page' => -1,
            'meta_key'       => 'date',      // ACFの日付フィールド名
            'orderby'        => 'meta_value',
            'order'          => 'DESC',
            'meta_type'      => 'DATE',      // 日付として並び替え
        );
        $the_query = new WP_Query($args);
        ?>
  
        <?php if ($the_query->have_posts()) : ?>
          <ul class="news-list">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <?php 
                $date = get_field('date'); // ACFの日付フィールド
                $link = get_field('news-link'); // ACFのリンクフィールド
              ?>
              <li class="news-item">
                <a class="news-link" href="<?php echo esc_url($link ? $link : get_permalink()); ?>" target="_blank" rel="noopener">
                  <?php if ($date): ?>
                    <span class="news-date"><?php echo esc_html($date); ?></span>
                  <?php endif; ?>
                  <span class="news-title"><?php the_title(); ?></span>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
          <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <div>
            <p>新着情報はありません。</p>
          </div>
        <?php endif; ?>
        <!-- 新着情報 -->
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>