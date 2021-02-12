<?php
    //テーマサポート
    function hamburgersiteraisetech_setup() {
    add_theme_support('post-thumbnails'); // アイキャッチ 
    add_theme_support( 'automatic-feed-links' ); // RSSフィード
    add_theme_support( 'title-tag' ); // タイトルタグ自動生成
    add_theme_support( 'html5', array( // HTML5のタグで出力
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ) );
    // ナビゲーションメニューの有効化
    register_nav_menu( 'side-navigation', 'Side Navigation' );
    // コンテンツの幅
    if ( ! isset( $content_width ) ) $content_width = 1920;
    
    }
    add_action( 'after_setup_theme', 'hamburgersiteraisetech_setup' );
    //タイトル出力
    function hamburgersiteraisetech_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburgersiteraisetech_title' );

    function hamburgersiteraisetech_script() {
        wp_enqueue_style( 'mplus+1p', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700;900&display=swap', array() );
        wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap', array() );
        wp_enqueue_style( 'noto+sans+jp', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700;900&display=swap', array() );
        wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '4.7.0' );
        wp_enqueue_style( 'ress', get_template_directory_uri() . '/ress.css', array(), '4.5.0' );
        wp_enqueue_style( 'stylehbg', get_template_directory_uri() . '/css/stylehbg.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'hamburger-script', get_template_directory_uri() . '/hamburger.js', array(),'' );
    }
    add_action( 'wp_enqueue_scripts', 'hamburgersiteraisetech_script' );

    function SearchFilter($query) {

        if (!is_admin() && $query->is_search()) {

            $query->set('post_type', 'post');

        }

        return $query;

    }

    add_action( 'pre_get_posts','SearchFilter' );
?>


