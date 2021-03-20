<!-- services
    ================================================== -->
    <section id='services' class="s-services target-section darker">

        <div class="row section-header bit-narrow" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead" id="service_do"><?= get_theme_mod( 'service_word' ) ?></h3>
                <h1 class="display-1" id="service_text">
                <?= get_theme_mod( 'service_text' ) ?>
                </h1>
            </div>
        </div> <!-- end section-header -->
        <?php dynamic_sidebar( 'services-sidebar' ) ?>
        </div> <!-- end services -->

    </section> <!-- end s-services -->