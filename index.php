<!doctype html>
<html lang="ja">
  <head>
        <meta charset="UTF-8">
        <title>RaiseTech-top</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/stylehbg.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ress.css">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700;900&display=swap" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">        
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  </head>
  <body class="wrapper">
    <div class="l-body">
       
        <header class="l-archive-search-body-header">
            <!-- 最上段からトップ画像の上まで① -->
            <div class="l-archive-search-body-header-top">
                <!-- 開閉用ボタン -->
                <div class="c-side-menu-btn" id="js__sideMenuBtn">menu</div>
                <div class="p-archive-search-header-left">
                    <h1>hamburger</h1>
                </div>

                <div class="p-archive-search-header-right">
                    <!-- 検索バー -->
                    <form class="c-archive-search-form" action="自分のサイトのURL">
                        
                        <input class="c-form-sbox5" id="s" name="s" type="text" placeholder="" />
                        <p class="c-search"><i class="fas fa-search fa-2x"></i></p>
                        
                        <input class="c-form-sbtn5" type="submit" value="検索" />
                    </form>
                </div>
            </div>
            <!-- トップ画像② -->
            <div class="l-header-top-image c-image">
                <h2 class="c-image-text-top">ダミーサイト</h2>
                <img class="c-image-top" src="<?php echo get_template_directory_uri(); ?>/images/header-top.jpg" alt="header-top">
                <img class="c-image-top-sp" src="<?php echo get_template_directory_uri(); ?>/images/header-top-sp-cut2.png" alt="header-top-sp">
            </div>
            <!-- テイクアウトとイートインの横並び画像の中に文字が入る③ -->
            <div class="l-header-choice">
                <!-- テイクアウト画像親要素 -->
                <div class="p-header-takeout c-image">
                    
                    <div class="p-header-takeout-wrapper">                   
                        <h2 class="c-image-logo-takeout">takeout</h2>
                        <!-- テイクアウト画像の子要素の文章を包むラップ -->                    
                        <div class="l-takeout-text">                        
                            <div class="c-text-card l-takeout-text-1">
                                <h3>テイクアウト１</h3>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            </div>
                            <div class="c-text-card l-takeout-text-2">
                                <h3>テイクアウト２</h3>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- イートイン画像親要素 -->
                <div class="p-header-eatin c-image">
                    <div class="p-header-eatin-wrapper">
                        <h2 class="c-image-logo-eatin">eat-in</h2>                    
                        <!-- イートイン画像の子要素の文章を包むラップ -->
                        <div class="l-eatin-text">
                            <div class="c-text-card l-eatin-text-1">
                                <h3>イートイン１</h3>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            </div>
                            <div class="c-text-card l-eatin-text-2">
                                <h3>イートイン２</h3>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Google マップに文字を重ねます④ -->
            <div class="l-map">   
                <div class="c-maptext">
                    <h2>見出しが入ります<br>ー</h2>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </div>
                <div class="iframe-wrapper">
                    <iframe class="c-googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7479754723163!2d139.74323885094424!3d35.65858048010236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1604574086398!5m2!1sja!2sjp?wmode=transparent" width="1553" height="649" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <iframe class="c-googlemap-sp" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12966.991898658345!2d139.7454329!3d35.6585805!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1607686359280!5m2!1sja!2sjp" width="375" height="691" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            

       


        </header>
        
        
        <aside class="l-body-aside">
            <h2 class="l-body-aside-menu p-hamburger-menu">menu</h2>
                <ul class="l-body-aside-hamburger p-hamburger c-menu">バーガー
                    <li>ハンバーガー</li>
                    <li>チーズバーガー</li>
                    <li>テリヤキバーガー</li>
                    <li>アボカドバーガー</li>
                    <li>フィッシュバーガー</li>
                    <li>ベーコンバーガー</li>
                    <li>チキンバーガー</li>
                </ul>
                <ul class="l-body-aside-side-menu p-side-menu c-menu">サイド
                    <li>ポテト</li>
                    <li>サラダ</li>
                    <li>ナゲット</li>
                    <li>コーン</li>
                </ul>
                <ul class="l-body-aside-drink-menu p-drink-menu c-menu">ドリンク
                    <li>コーラ</li>
                    <li>ファンタ</li>
                    <li>オレンジ</li>
                    <li>アップル</li>
                    <li>紅茶 (Ice/Hot)</li>
                    <li>コーヒー (Ice/Hot)</li>
                </ul>

        </aside>

        <!-- サイドオープン時メインコンテンツを覆う -->
        <div class="overlay"></div>

        <!-- サイドメニュー -->
        <nav class="side-menu">
    
            <ul class="l-side-hamburger c-menu">バーガー
                <li>ハンバーガー</li>
                <li>チーズバーガー</li>
                <li>テリヤキバーガー</li>
                <li>アボカドバーガー</li>
                <li>フィッシュバーガー</li>
                <li>ベーコンバーガー</li>
                <li>チキンバーガー</li>
            </ul>
            <ul class="l-side-side-menu c-menu">サイド
                <li>ポテト</li>
                <li>サラダ</li>
                <li>ナゲット</li>
                <li>コーン</li>
            </ul>
            <ul class="l-side-drink-menu c-menu">ドリンク
                <li>コーラ</li>
                <li>ファンタ</li>
                <li>オレンジ</li>
                <li>アップル</li>
                <li>紅茶 (Ice/Hot)</li>
                <li>コーヒー (Ice/Hot)</li>
            </ul>

        </nav>
        
        <!-- プラスマイナス ボタン -->
        <div class="c-fas c-show"><i class="fas fa-times"></i></div>

        
        
    </div>

    <!-- footer -->
    <footer class="l-footer">
        <p class="c-footer-info">ショップ情報｜ヒストリー</p>
        <p class="c-footer-copyright">Copyright:RaiseTech</p>
    </footer>
    <script type="text/javascript" src="hamburger.js"></script>
  </body>
</html>
