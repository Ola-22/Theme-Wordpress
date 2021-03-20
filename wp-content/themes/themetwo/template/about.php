
    <section id="about" class="s-about target-section">

        <div class="row section-header bit-narrow" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead" id="subhead"><?= get_theme_mod( 'about_word' ) ?></h3>
                <h1 class="display-1" id="display-1">
                <?= get_theme_mod( 'about_word_text' ) ?>
                </h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row bit-narrow" data-aos="fade-up">
            <div class="col-full">
                <p class="lead" id="lead">
                    <?= get_theme_mod( 'about_word2' ) ?>
                </p>
            </div>
        </div> <!-- end about-desc -->
            <?php dynamic_sidebar( 'left-sidebar' ) ?>

    </section> <!-- end s-about -->