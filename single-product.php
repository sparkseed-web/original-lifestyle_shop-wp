<?php get_header(); ?>

    <div class="single-product">
        <section id="category">
        <div class="category-container">
            <div class="decoration-top">
                <img src="<?php echo get_template_directory_uri() . '/images/87512 2.svg' ?>" alt="">
            </div>
            <div class="decoration-bottom">
                <img src="<?php echo get_template_directory_uri() . '/images/87512 4.svg' ?>" alt="">
            </div>   
            
            

            <div class="wrapper">
                <div class="img"><?php the_post_thumbnail(); ?></div>
                <div class="inner">
                    <div class="title"><h2><?php the_title(); ?></h2></div>
                    <h3 class="praice">￥220(税込み)</h3>
                    <a href="" class="addCartButton">カートに入れる</a>
                    <a href="" class="addToFavorites">お気に入りに登録</a>
                    <div class="product-description">
                        <p><?php the_content(); ?></p>
                    </div>
                    
                    <div class="detail">
                        <h4 class="product-spec-title">【商品仕様】</h4>
                            
                            <dl class="product-spec">
                                <?php if ( get_field('size') ): ?>
                                <dt>サイズ</dt>
                                <dd><?php the_field('size'); ?></dd>
                                <?php endif; ?>

                                <?php if ( get_field('page_count') ): ?>
                                <dt>ページ数</dt>
                                <dd><?php the_field('page_count'); ?></dd>
                                <?php endif; ?>

                                <?php if ( get_field('cover') ): ?>
                                <dt>表紙</dt>
                                <dd><?php the_field('cover'); ?></dd>
                                <?php endif; ?>

                                <?php if ( get_field('set_count') ): ?>
                                <dt>冊数</dt>
                                <dd><?php the_field('set_count'); ?></dd>
                                <?php endif; ?>

                                <?php if ( get_field('paper_type') ): ?>
                                <dt>用紙</dt>
                                <dd><?php the_field('paper_type'); ?></dd>
                                <?php endif; ?>

                                <?php if ( get_field('seat_height') ): ?>
                                <dt>座面高さ</dt>
                                <dd><?php the_field('seat_height'); ?></dd>
                                <?php endif; ?>

                                <?php if ( get_field('material') ): ?>
                                <dt>素材</dt>
                                <dd><?php the_field('material'); ?></dd>
                                <?php endif; ?>

                                <?php if ( get_field('color') ): ?>
                                <dt>カラー</dt>
                                <dd><?php the_field('color'); ?></dd>
                                <?php endif; ?>

                                <?php if ( get_field('weight') ): ?>
                                <dt>質量</dt>
                                <dd><?php the_field('weight'); ?></dd>
                                <?php endif; ?>

                                <?php if ( get_field('capacity') ): ?>
                                <dt>容量</dt>
                                <dd><?php the_field('capacity'); ?></dd>
                                <?php endif; ?>

                                <?php if ( get_field('load_capacity') ): ?>
                                <dt>耐荷重</dt>
                                <dd><?php the_field('load_capacity'); ?></dd>
                                <?php endif; ?>

                                <?php if ( get_field('heat_resistance') ): ?>
                                <dt>耐熱温度</dt>
                                <dd><?php the_field('heat_resistance'); ?></dd>
                                <?php endif; ?>

                                <?php if ( get_field('assembly') ): ?>
                                <dt>組み立て</dt>
                                <dd><?php the_field('assembly'); ?></dd>
                                <?php endif; ?>

                                <?php if ( get_field('caution') ): ?>
                                <dt>注意事項</dt>
                                <dd><?php the_field('caution'); ?></dd>
                                <?php endif; ?>

                                <?php if ( get_field('country') ): ?>
                                <dt>生産国</dt>
                                <dd><?php the_field('country'); ?></dd>
                                <?php endif; ?>
                            </dl>
                    </div>
                </div>
            </div>
            <?php
                $terms = get_the_terms(get_the_ID(), 'product_category');
                if ($terms && ! is_wp_error($terms)) {
                    $term = array_shift($terms);
                    $term_link = get_term_link($term);
                }
            ?>
                        
            <a href="<?php echo esc_url($term_link); ?>" class="to-toppage link-underline">一覧に戻る</a>

        </div>
    </section>
    </div>


<?php get_footer(); ?>