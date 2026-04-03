<?php
    add_action('wp_enqueue_scripts','add_styles');

    function add_styles(){

        // リセットcssを登録する
        wp_register_style(
            'reset_style',
            'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css',
            array(),
            '1.0'
        );

        // メインCSSを登録する
        wp_register_style(
            'main_style',
            get_template_directory_uri() . '/css/main.css',
            array(),
            '1.0'
        );

        // font-awesomeを登録
        wp_register_style(
            'font-awesome',
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
            array(),
            '1.0'
        );

        // google-fontsを登録する
        wp_enqueue_style(
            'google-fonts',
            'https://fonts.googleapis.com/css2?family=Kiwi+Maru&family=Shippori+Mincho+B1:wght@100;800&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap',
            array('reset_style','main_style','font-awesome'),
            '1.0'
        );


    }

    add_action('wp_enqueue_scripts','add_scripts');
    
    function add_scripts(){

        // デフォルトのjQueryを削除
        wp_deregister_script('jquery');

        wp_register_script(
            'jQuery',
            'https://code.jquery.com/jquery-3.7.1.min.js',
            array(),
            '1.0',
            true
        );

        wp_enqueue_script(
            'jQuery-style',
            get_template_directory_uri() . '/js/script.js',
            array('jQuery'),
            '1.0',
            true
        );  
    }

//     add_theme_support('post-thumbnails');

//      //カスタム投稿
//     add_action('init' ,'create_product_post_type');

//     function create_product_post_type(){

//         register_post_type('product' , [
//             'label' => '商品',
//             'public' => true,
//             'has_archive' => true,
//             'rewrite' => ['slug' => 'product'],
//             'supports' => ['title' , 'editor' , 'thumbnail' ],
//             'menu_icon' => 'dashicons-cart'
//         ]);

//     }
// ?>