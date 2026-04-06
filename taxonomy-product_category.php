
<?php get_header(); ?>

<div class="taxonomy-product_category">
    <section id="category">
            <div class="category-container">
                <div class="decoration-top">
                    <img src="<?php echo get_template_directory_uri() . '/images/87512 2.svg' ?>" alt="">
                </div>
                <div class="decoration-bottom">
                    <img src="<?php echo get_template_directory_uri() . '/images/87512 4.svg' ?>" alt="">
                </div>   
                
                <div class="title">
                    <h2><?php single_term_title(); ?></h2>
                </div>

                <ul class="wrapper">
                    <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();

                                // 商品のアイキャッチ画像
                                $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                    ?>

                    
                        <li class="item">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                            </a>
                            <a href="<?php the_permalink(); ?>" class="link-underline">
                                <p class="category-name"><?php the_title(); ?></p>
                            </a>
                        </li>

                    <?php 
                        endwhile;
                    else:
                        echo '<p>商品がありません</p>';
                    endif;
                    ?>
                    
                </ul> 
                <a href="/" class="to-toppage link-underline">一覧に戻る</a>
            </div>
    </section>
</div>
<?php get_footer(); ?>