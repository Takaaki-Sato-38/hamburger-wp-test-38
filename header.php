<!doctype html>
<html lang="ja">
 
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php wp_title('|', true, 'right'); bloginfo('name'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/stylehbg.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ress.css">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700;900&display=swap" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">        
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <?php wp_head(); ?>
    </head>
    <body>
  <?php wp_body_open(); ?>
  <div class="wrapper">
  
    <div class="l-body">
       
        <div class="l-archive-search-body-header">
            <!-- 最上段からトップ画像の上まで① -->
            <header class="l-archive-search-body-header-top">
                <!-- 開閉用ボタン -->
                <div class="c-side-menu-btn" id="js__sideMenuBtn">menu</div>
                <div class="p-archive-search-header-left">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">hamburger</a>
                </div>

                <div class="p-archive-search-header-right">
                    <!-- 検索バー -->
                    <?php get_search_form(); ?>
                    
                </div>
            </header>