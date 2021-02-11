<!doctype html>
<html <?php language_attributes(); ?>>
 
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
                
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
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