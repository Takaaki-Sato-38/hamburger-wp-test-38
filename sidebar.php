<aside class="l-body-aside">
            <h2 class="l-body-aside-menu p-hamburger-menu">menu</h2>
            
            <?php wp_nav_menu( array( 'theme_location' => 'side-navigation' ) ); ?>

        </aside>

        <!-- サイドオープン時メインコンテンツを覆う -->
        <div class="overlay"></div>

        <!-- サイドメニュー -->
        <nav class="side-menu">
        
            <?php wp_nav_menu( array( 'theme_location' => 'side-navigation' ) ); ?>

        </nav>
        
        <!-- プラスマイナス ボタン -->
        <div class="c-fas c-show"><i class="fas fa-times"></i></div>