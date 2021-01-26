    <?php get_header(); ?>
            <!-- トップ画像② -->
            <div class="c-image-archive-search">
                <div class="c-image-archive-search-top">
                    <img class="c-image-archive-top-image" src="images/archive-header-top1.png">
                    <img class="c-image-archive-top-image-sp" src="images/archive-header-top-sp-cut.jpg">
                </div>
                <div class="c-image-archive-search-text-top-wrapper">
                    <div class="c-image-archive-search-text-top-wrapper-2">
                        <p class="c-image-archive-search-text-top">menu:</p>
                        <p class="c-image-archive-search-text-top-s">チーズバーガー</p>
                
                    </div>
                </div>

              
            </div>
            <!-- メイン文章③ -->  
                
            <div class="c-archive-search-center-wrapper">
                <div class="c-archive-center-title">小見出しが入ります</div>

                <div class="c-archive-center-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</div>
            </div>
            
            <!-- ハンバーガーカード④ -->
            <!-- チーズバーガー-->
            <div class="c-archive-center-card-wrapper">
                <div class="c-archive-center-card-image">
                    
                </div>
                <div class="c-archive-center-card-description">
                    <div class="c-archive-center-card-title">チーズバーガー</div>
                    <div class="c-archive-center-card-text">
                        <h3>小見出しが入ります</h3>
                        <p>テキストが入ります。キストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                    <botton class="c-archive-center-card-botton">詳しく見る</botton>
                </div>
            </div>

            <!-- ダブルチーズバーガー-->
            <div class="c-archive-center-card-wrapper">
                <div class="c-archive-center-card-image">

                </div>
                <div class="c-archive-center-card-description">
                    <div class="c-archive-center-card-title">ダブルチーズバーガー</div>
                    <div class="c-archive-center-card-text">
                        <h3>小見出しが入ります</h3>
                        <p>テキストが入ります。キストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                    <botton class="c-archive-center-card-botton">詳しく見る</botton>
                </div>
            </div>

            <!-- スペシャルチーズバーガー-->
            <div class="c-archive-center-card-wrapper">
                <div class="c-archive-center-card-image">

                </div>
                <div class="c-archive-center-card-description">
                    <div class="c-archive-center-card-title">スペシャルチーズバーガー</div>
                    <div class="c-archive-center-card-text">
                        <h3>小見出しが入ります</h3>
                        <p>テキストが入ります。キストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                    <botton class="c-archive-center-card-botton">詳しく見る</botton>
                </div>
            </div>

            <!-- ページネーション-->
            <div class="c-archive-pagination">
            <?php if (function_exists('wp_pagenavi')) {wp_pagenavi();} ?>
                <p class="c-archive-pagination-current">page1/10</p>
                <div class="c-archive-pagination-prev">«</div>
                <div class="c-archive-pagination-prev-font">«前へ</div>
                <div class="c-archive-pagination-number-black">1</div>
                <div class="c-archive-pagination-number-white">2</div>
                <div class="c-archive-pagination-number-white">3</div>
                <div class="c-archive-pagination-number-white">4</div>
                <div class="c-archive-pagination-number-white">5</div>
                <div class="c-archive-pagination-number-white">6</div>
                <div class="c-archive-pagination-number-white">7</div>
                <div class="c-archive-pagination-number-white">8</div>
                <div class="c-archive-pagination-number-white">9</div>
                <div class="c-archive-pagination-next-font">後へ»</div>
                <div class="c-archive-pagination-next">»</div>
            </div>

            

       


        </div>
        
        <?php get_sidebar(); ?>
        
        
        
    </div>
    
    <?php get_footer(); ?>