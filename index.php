
   
  
  <?php get_header(); ?>
  
  
  

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
                        <a class="c-image-logo-takeout">takeout</a>
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
                        <a class="c-image-logo-eatin">eat-in</a>                    
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

            

       


        </div>
        
        
        <?php get_sidebar(); ?>

        
        
    </div>
    
    <?php get_footer(); ?>

    