<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
</head>


<body id="top">
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <header class="s-header">

        <div class="header-logo">
             <?php the_custom_logo() ?>
        </div> <!-- end header-logo -->

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <h3>Navigate to</h3>

            <div class="header-nav__content">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'items_wrap' => '
                    <ul class="header-nav__list">%3$s</ul>',
                ]);
                ?>
    
                <p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>
    

                <?php
                wp_nav_menu([
                    'theme_location' => 'social',
                    'items_wrap' => '
                    <ul class="header-nav__social">%3$s</ul>',
                ]);
                ?>

            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->