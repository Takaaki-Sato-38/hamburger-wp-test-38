    <?php get_header(); ?>
            <!-- トップ画像② -->
            <div class="c-image-archive-search">
                <div class="c-image-archive-search-top">
                
                    <img class="c-image-archive-top-image" src="<?php echo esc_url ( get_template_directory_uri() .'/images/archive-header-top1.png'); ?>">
                    <img class="c-image-archive-top-image-sp" src="<?php echo esc_url ( get_template_directory_uri() .'/images/archive-header-top-sp-cut.jpg'); ?>">
                </div>
                <div class="c-image-archive-search-text-top-wrapper">
                    <div class="c-image-archive-search-text-top-wrapper-2">
                        <p class="c-image-archive-search-text-top">menu:</p>
                        <p class="c-image-archive-search-text-top-s"><?php wp_title(''); ?></p>
                
                    </div>
                </div>

              
            </div>
            <!-- メイン文章③ -->  
                
            <div class="c-archive-search-center-wrapper">
                <div class="c-archive-center-title">小見出しが入ります</div>

                <div class="c-archive-center-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</div>
            </div>
            
            <!-- ハンバーガーカード④ -->
            <!-- チーズバーガー -->

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>


            <div class="c-archive-center-card-wrapper">
                <div class="c-archive-center-card-image">
                    <?php the_post_thumbnail("thumbnail"); ?>    
                </div>
                <div class="c-archive-center-card-description">
                    <div class="c-archive-center-card-title"><?php the_title(); ?></div>
                    <div class="c-archive-center-card-text">
                        <h3>小見出しが入ります</h3>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                    <botton class="c-archive-center-card-botton"><a class="c-archive-permalink" href="<?php the_permalink(); ?>">詳しく見る</a></botton>
                </div>
                
            </div>

            <?php endwhile; else: ?>
                <p class="c-archive-no-post">記事がありません。</p>
                <?php endif; ?>
            
            

            <!-- ページネーション-->
            <div class="c-archive-pagination">
                <?php wp_pagenavi(); ?>
                
            </div>

            

       


        </div>
        
        <?php get_sidebar(); ?>
        
        
        
    </div>
    
    <?php get_footer(); ?>