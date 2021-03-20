<!-- contact
    ================================================== -->
    <section id="contact" class="s-contact target-section">

            <div class="grid-overlay">
                <div></div>
            </div>

        <div class="row section-header narrow" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead" id="contact_text"><?= get_theme_mod('contact_text') ?></h3>
                <h1 class="display-1" id="contact_word"><?= get_theme_mod('contact_word') ?><br></h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row contact-main" data-aos="fade-up">
            <div class="col-full">
                <p class="contact-email">
                    <a href="mailto:#0"><?= get_theme_mod('contact_email') ?></a>
                </p>
                <p class="contact-address">
                <?= get_theme_mod('contact_address') ?>
                </p>
                <p class="contact-numbers">
                <?= get_theme_mod('contact_numbers') ?>
                </p>
                    
                <?php
                wp_nav_menu([
                    'theme_location' => 'social',
                    'items_wrap' => '
                    <ul class="contact-social">%3$s</ul>',
                ]);
                ?>

            </div>
        </div>

    </section> <!-- end s-contact -->