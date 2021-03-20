    <!-- home
    ================================================== -->
    <section id="home" class="s-home page-hero target-section">

        <div class="grid-overlay">
            <div></div>
        </div>

        <div class="home-content">

            <div class="row home-content__main">

                <h1 id="wordTopImg">
                <?= get_theme_mod( 'word_image' ) ?>
                </h1>

                <h3 id="wordImg">
                <?= get_theme_mod('word_top_image') ?>
                </h3>

                <div class="home-content__video">
                    <a class="video-link" href=" <?= get_theme_mod( 'watch_video' ) ?>" data-lity>
                        <span class="video-icon"></span>
                        <span class="video-text">Watch Video</span>
                    </a>
                </div>

                <div class="home-content__button">
                    <a href="#about" class="smoothscroll btn btn--primary btn--large">
                        More About Us
                    </a>
                    <a href="#contact" class="smoothscroll btn btn--large">
                        Let's Talk
                    </a>
                </div>

            </div> <!-- end home-content__main -->

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <?php _e('Scroll', 'theme-two') ?>
                </a>
            </div>

        </div> <!-- end home-content -->
        
        <?php
                wp_nav_menu([
                    'theme_location' => 'social',
                    'items_wrap' => '
                    <ul class="home-social">%3$s</ul>',
                ]);
                ?>
    </section> <!-- end s-home -->