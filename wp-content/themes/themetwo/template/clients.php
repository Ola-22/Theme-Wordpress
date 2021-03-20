<!-- clients
    ================================================== -->
    <section id="clients" class="s-clients target-section darker">

        <div class="grid-overlay">
            <div></div>
        </div>

        <div class="row section-header text-center narrow" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead" id="client_text"><?= get_theme_mod('client_word') ?></h3>
                <h1 class="display-1" id="client_word"><?= get_theme_mod('client_text') ?></h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row clients-wrap" data-aos="fade-up">
            <div class="col-twelve">
            <?php
                wp_nav_menu([
                    'theme_location' => 'clients',
                    'items_wrap' => '
                    <ul class="clients">%3$s</ul>',
                ]);
                ?>
            </div>
        </div>

    </section> <!-- end s-clients -->