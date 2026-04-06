<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sotto</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- google-fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&family=Shippori+Mincho+B1:wght@100;800&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" >
    

    <?php wp_head(); ?>
</head>

<body>

    <header>    
        <div class="logo-area">
            <a href="<?php echo esc_url(home_url()); ?>">
                <img class="brand-icon" src="<?php echo get_template_directory_uri() . '/images/kotori.jpg'?>" alt="sottoのブランドアイコン">
            </a>
            <div class="titles">
                <h1 class="brand-logo"><a href="/">sotto</a></h1>
                <a class="brand-subtitle" href="/">静かに、やさしく、よりそう</a>
            </div>
        </div>
        <div class="header-right">
            <a href="#"><img class="cart-icon btn" src="<?php echo get_template_directory_uri() .'/images/cart-icon.svg' ?>" alt="カートボタン"></a>
            <a href="#"><img class="heart-icon btn" src="<?php echo get_template_directory_uri() .'/images/heart.svg' ?>" alt="お気に入りボタン"></a>
            <div class="toggle_btn  btn " >
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="mask"></div>
        <nav class="header-nav">
            
            <div class="header-nav-inner">
                <div class="logo-area">
                    <a href="<?php echo esc_url(get_home_url()); ?>">
                        <img class="brand-icon" src="<?php echo get_template_directory_uri() . '/images/kotori.jpg'?>" alt="sottoのブランドアイコン">
                    </a>
                    <div class="titles">
                        <p class="brand-logo"><a href="<?php echo esc_url(get_home_url()); ?>">sotto</a></p>
                        <a class="brand-subtitle" href="<?php echo esc_url(get_home_url()); ?>">静かに、やさしく、よりそう</a>
                    </div>
                    
                </div>
            </div>

            <ul class="en">
                <li><a href="<?php echo esc_url(get_home_url()); ?>">TOP</a></li>
                <li><a href="/">ABOUT US</a></li>
                <li><a href="<?php echo esc_url(get_home_url()); ?>">CATEGORY</a></li>
                <li><a href="/#news">NEWS</a></li>
                <li><a href="/">COLUMN</a></li>
            </ul>

            <ul class="jp">
                <li><a href="/">あなたのお気に入り</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>  
                <li><a href="/">よくあるご質問</a></li>
                <li><a href="/">配送・お支払いについて</a></li>
            </ul>

            <div class="sns-icons">
                <a href="https://instagram.com/youraccount" class="instagram" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-instagram btn "></i>
                </a>
                <a href="https://twitter.com/youraccount" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-twitter btn"></i>
                </a>
            </div>
        </nav>

    </header>