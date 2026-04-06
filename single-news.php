<?php get_header();?>

    <div class="single-news">
    <section id="news">
            <div class="wrapper">
                <div class="title">
                    <h2>NEWS</h2>
                    <div class="subtitle"><?php the_title(); ?></div>
                </div>

                <ul>
                    <?php 
                        if( have_posts()):  //投稿があれば処理に入る
                        while(have_posts()): //投稿の数だけ繰り返す
                        the_post(); //回数に応じた投稿の情報を取得
                    ?>
                        <li class="news-link">
                            
                                <time  class="link-underline" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                                <?php the_content(); ?>
                            
                        </li>
                    
                    <?php 
                        endwhile;
                            else:
                    ?>
                        <li>投稿がありません</li>

                    <?php 
                        endif;
                        wp_reset_postdata(  );
                    ?>
                </ul>

                

                <img class="right-leaf" src="<?php echo get_template_directory_uri() . '/images/三本の木 1.svg' ?>" alt="">
                <img class="left-leaf" src="<?php echo get_template_directory_uri() . '/images/北欧の木 1.svg' ?>" alt="">
                <a href="<?php echo esc_url( home_url() ); ?>" class="more-btn">TOPに戻る</a>
            </div>
            
    </section>
    </div>
<?php get_footer();?>