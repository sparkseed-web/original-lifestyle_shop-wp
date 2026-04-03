
<?php get_header(); ?>

<main>
    <video src="<?php echo esc_url(get_template_directory_uri() . '/images/761_640x360.mp4') ?>" autoplay muted loop></video>
    <div class="box">暮らしの中で、ほんの少し<br>自分を思い出す。</div>
    <section id="category">
        <div class="category-container">
            <div class="decoration-top">
                <img src="<?php echo get_template_directory_uri() . '/images/87512 2.svg' ?>" alt="">
            </div>
            <div class="decoration-bottom">
                <img src="<?php echo get_template_directory_uri() . '/images/87512 4.svg' ?>" alt="">
            </div>

            <div class="title">
                <h2>CATEGORY</h2>
                <div class="subtitle">カテゴリ―</div>
            </div>

            

            <ul class="wrapper">
                <?php
                // 表示したい順番でスラッグを並べる
                $terms = ['new', 'interior', 'tablewear', 'chair', 'stationery', 'accessory'];

                foreach ($terms as $term_slug) {

                    // ターム取得
                    $term = get_term_by('slug', $term_slug, 'product_category');

                    if ($term && !is_wp_error($term)) {

                        // タームリンク
                        $term_link = get_term_link($term, 'product_category');

                        // スラッグ名で画像を読み込む
                        $image_url = get_template_directory_uri() . '/images/category/' . $term_slug . '.jpg';
                ?>
                    <li class="item">
                        <a href="<?php echo esc_url($term_link); ?>">
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($term->name); ?>">
                        </a>
                        <a href="<?php echo esc_url($term_link); ?>" class="link-underline">
                            <p class="category-name"><?php echo esc_html($term->name); ?></p>
                        </a>
                    </li>
                <?php
                    }
                }
                ?>
            </ul>   
        </div>
    </section>

    <section id="news">
        <div class="wrapper">
            <div class="title">
                <h2>NEWS</h2>
                <div class="subtitle">ニュース</div>
            </div>

            <ul>
                <?php
                // 1. 「newsの棚から5件取ってきて」という指示書（$args）を作る
                $args = array(
                    'post_type' => 'news', 
                    'posts_per_page' => 5,
                );
                // 2. 指示書を渡して記事を取得する（$news_query）
                $news_query = new WP_Query($args); 
                ?>

                <?php if ($news_query->have_posts()): ?>
                    <?php while ($news_query->have_posts()): $news_query->the_post(); ?>    
                
                        <li>
                            <a href="<?php the_permalink(); ?>" class="news-link">
                                <time class="link-underline" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                                <p class="link-underline"><?php the_title(); ?></p>
                            </a>
                        </li>

                    <?php
                    endwhile;
                else:
                    ?>
                    <li>投稿がありません</li>

                <?php
                endif;
                wp_reset_postdata();
                ?>
            </ul>



            <img class="right-leaf" src="<?php echo get_template_directory_uri() . '/images/三本の木 1.svg' ?>" alt="">
            <img class="left-leaf" src="<?php echo get_template_directory_uri() . '/images/北欧の木 1.svg' ?>" alt="">
            <a href="#" class="more-btn">もっと見る</a>
        </div>

    </section>
    <div class="chair"></div>
</main>

<?php get_footer(); ?>