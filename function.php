<php?

function my_setup() {
  add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
  add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
  add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
  add_theme_support( 'html5', array( /* HTML5のタグで出力 */
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
}

function register_stylesheet() { //読み込むCSSを登録する
	wp_register_style('ress', get_template_directory_uri().'/ress.css');
	wp_register_style('style', get_template_directory_uri().'/style.css');
  wp_register_style('style', get_template_directory_uri().'/css/stylehbg.css');
}
wp_enqueue_script('google-fonts_script', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700;900&display=swap'); 
wp_enqueue_script('google-fonts_script', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap');
wp_enqueue_script('google-fonts_script', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700;900&display=swap');
wp_enqueue_script('fontawesome_script', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');

wp_enqueue_script('hamburger_script', get_template_directory_uri() . '/hamburger.js', array(jQuery), '', true); 