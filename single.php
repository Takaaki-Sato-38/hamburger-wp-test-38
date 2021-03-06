<?php get_header(); ?>

            <!-- トップ画像② -->
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="c-image-single">
                <div class="c-image-archive-search-top">
                    <img class="c-image-archive-top-image" src="<?php echo esc_url ( get_template_directory_uri() .'/images/single-header-top-image.png'); ?>">
                    <img class="c-image-archive-top-image-sp" src="<?php echo esc_url ( get_template_directory_uri() .'/images/single-header-top-image-sp.png'); ?>">
                </div>
                <div class="c-image-single-text-top-wrapper">
                    <div class="c-image-single-text-top-wrapper-2">
                        
                        <p class="c-image-single-text-top-s"><?php the_title(); ?></p>
                    </div>
                </div>
                

              
            </div>

            <!-- 見出し -->
            <div class="c-single-maintext-wrapper">
                <h2 class="c-single-maintext-h2">見出しh2</h2>
                <p class="c-single-maintext-p">pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。</p>
                <h3 class="c-single-maintext-h3">見出しh3</h3>
                <h4 class="c-single-maintext-h4">見出しh4</h4>
                <h3 class="c-single-maintext-h3-second">見出しh3</h3>
                <h4 class="c-single-maintext-h4-second">見出しh4</h4>
                <h5 class="c-single-maintext-h5">見出しh5</h5>
                <h6 class="c-single-maintext-h6">見出しh6</h6>
            </div>
            <!-- 本文 -->
            <div class="c-single-quote-wrapper">
                <p class="c-single-quote-text">Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>

                <p class="c-single-quote-source">出典元：○○○○○○○○○○</p>
            </div>

            <!-- ハンバーガー写真 -->
            <div class="c-single-hamburger-image">
                <img class="c-single-big-hamburger" src="<?php echo esc_url ( get_template_directory_uri() .'/images/single-big-hamburger.png'); ?>">
                <div class="c-single-middle-hamburger-wrapper">
                    
                    <div class="c-single-middle-hamburger-Item">
                    
                            <div class="c-single-middle-hamburger-Item-Img" style="background:url('<?php echo esc_url ( get_template_directory_uri() .'/images/single-middle-hamburger.png'); ?>') no-repeat center; background-size:cover; background-position:center;"></div>
                        </div>

                        
                        <p class="c-single-middle-hamburger-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

                    </div>


                    <div class="c-single-middle-hamburger-wrapper-reverse">
                        
                        

                        <p class="c-single-middle-hamburger-text-reverse">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        

                        <div class="c-single-middle-hamburger-Item">
                            <div class="c-single-middle-hamburger-Item-Img" style="background:url('<?php echo esc_url ( get_template_directory_uri() .'/images/single-middle-hamburger.png') ?>') no-repeat center; background-size:cover; background-position:center;"></div>
                        </div>
                    
                    
                    
                    

                </div>
                
                <div class="c-single-middle-hamburger-center">
                    
                    <img class="c-single-middle-hamburger-image-center" src="<?php echo esc_url ( get_template_directory_uri() .'/images/single-middle-hamburger.png'); ?>">
                </div>
            
            
            <!-- ハンバーガー9個 -->
                <div class="c-single-little-hamburger-wrapper">
                    <div class="c-single-little-hamburger-image">
                        
                        <img src="<?php echo esc_url ( get_template_directory_uri() .'/images/single-little-hamburger.png'); ?>">
                    </div>
                    <div class="c-single-little-hamburger-image">
                        
                        <img src="<?php echo esc_url ( get_template_directory_uri() .'/images/single-little-hamburger.png'); ?>">
                    </div>
                    <div class="c-single-little-hamburger-image">
                        
                        <img src="<?php echo esc_url ( get_template_directory_uri() .'/images/single-little-hamburger.png'); ?>">
                    </div>
                    <div class="c-single-little-hamburger-image">
                        
                        <img src="<?php echo esc_url ( get_template_directory_uri() .'/images/single-little-hamburger.png'); ?>">
                    </div>
                    <div class="c-single-little-hamburger-image">
                        
                        <img src="<?php echo esc_url ( get_template_directory_uri() .'/images/single-little-hamburger.png'); ?>">
                    </div>
                    <div class="c-single-little-hamburger-image">
                        
                        <img src="<?php echo esc_url ( get_template_directory_uri() .'/images/single-little-hamburger.png'); ?>">
                    </div>
                    <div class="c-single-little-hamburger-image">
                        
                        <img src="<?php echo esc_url ( get_template_directory_uri() .'/images/single-little-hamburger.png'); ?>">
                    </div>
                    <div class="c-single-little-hamburger-image">
                        
                        <img src="<?php echo esc_url ( get_template_directory_uri() .'/images/single-little-hamburger.png'); ?>">
                    </div>
                    <div class="c-single-little-hamburger-image">
                        
                        <img src="<?php echo esc_url ( get_template_directory_uri() .'/images/single-little-hamburger.png'); ?>">
                    </div>

                </div>
            </div>

            <!-- リスト表示 -->
            <div class="c-single-list-wrapper">
                <ul class="c-single-list">
                    <li>1.リストリストリスト</li>
                    <li>2.リストリストリスト</li>
                                       
                </ul>
                <ul class="c-single-list-2">
                    <li>1.リスト2リスト2リスト2</li>
                    <li>2.リスト2リスト2リスト2</li>
                    
                </ul>
                <ul class="c-single-list-3">
                    <li>1.リストリストリスト</li>
                    <li>2.リストリストリスト</li>
                                        
                </ul>
                <ul class="c-single-list-4">
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                                    
                </ul>
                <ul class="c-single-list-5">
                    <li>リスト2リスト2リスト2</li>
                    <li>リスト2リスト2リスト2</li>
                                    
                </ul>
                <ul class="c-single-list-6">
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                                        
                </ul>
            </div>

            <!-- code表示 -->
            <div class="c-single-code-wrapper">   
            <pre>
            <code>
            &lt;html&gt;
                &lt;head&gt;
                &lt;/head&gt;
                &lt;body&gt;
                &lt;/body&gt;
            &lt;/html&gt;
            </code>
            </pre>
            </div>

            <!-- テーブル表示 -->
            <div class="c-single-table-wrapper">
                <table class="c-single-table" border="0">
                    <tr class="c-table">
                        <td class="c-table-left">テーブル</td><td class="c-table-right">テーブル</td>
                    </tr>
                    <tr>
                        <td class="c-table-left">テーブル</td><td class="c-table-right">テーブル</td>
                    </tr>
                    <tr>
                        <td class="c-table-left">テーブル</td><td class="c-table-right">テーブル</td>
                    </tr>
                    <tr>
                        <td class="c-table-left">テーブル</td><td class="c-table-right">テーブル</td>
                    </tr>
                </table>
            </div>
            <!-- ボタン -->
            <div class="c-single-button">
                <imput class="c-form-sbtn5-single">ボタン</imput>
            </div>
            <!-- bottom-text -->
            <div class="c-single-bottom-text">
                <p>boldboldboldboldboldbold</p>
            </div>
                
            <?php endwhile; else: ?>
            <p>記事がありません。</p>
            <?php endif; ?>
            

            

            
        </div>
        
        <?php get_sidebar(); ?>

        
        
    </div>

    <?php get_footer(); ?>