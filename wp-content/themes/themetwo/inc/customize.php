<?php
function mytheme_customize(WP_Customize_Manager $customize) {

    $customize->add_section('themetwo_section',[
        'title' => __('My Theme Option', 'theme-two'),
        'description' => __('My Theme Options description', 'theme-two'),
        'priority' => 30,
    ]);

    $customize->add_setting('word_image', [
        'default' => 'sublime'
    ]);
    $customize->add_control('word_image',[
        'section' => 'themetwo_section',
        'label' => __('Word Top Image', 'theme-two'),
        'type' => 'text',
        'priority' => 1
    ]);

    $customize->add_setting('word_top_image', [
    ]);
    $customize->add_control('word_top_image',[
        'section' => 'themetwo_section',
        'label' => __('Word Top Image 2', 'theme-two'),
        'type' => 'text',
        'priority' => 2
    ]);


    $customize->add_setting('watch_video', [
        'default' => 'https://player.vimeo.com/video/117310401?color=01aef0&title=0&byline=0&portrait=0'
    ]);
    $customize->add_control('watch_video',[
        'section' => 'themetwo_section',
        'label' => __('Enter Path Video', 'theme-two'),
        'type' => 'text',
        'priority' => 3
    ]);
    
    $customize->selective_refresh->add_partial('word_image', [
        'selector' => '#wordTopImg'
    ]);
    $customize->selective_refresh->add_partial('word_top_image', [
        'selector' => '#wordImg'
    ]);
    $customize->selective_refresh->add_partial('watch_video', [
        'selector' => '.video-link'
    ]);



    $customize->add_section('about_section',[
        'title' => __('About Section', 'theme-two'),
        'description' => __('About Options description', 'theme-two'),
        'priority' => 40,
    ]);
    
    $customize->add_setting('about_word');

    $customize->add_control('about_word',[
        'section' => 'about_section',
        'label' => __('About Text', 'theme-two'),
        'type' => 'text',
        'priority' => 1
    ]);


    $customize->add_setting('about_word_text');

    $customize->add_control('about_word_text',[
        'section' => 'about_section',
        'label' => __('About Text2', 'theme-two'),
        'type' => 'text',
        'priority' => 2
    ]);

    $customize->add_setting('about_word2');

    $customize->add_control('about_word2',[
        'section' => 'about_section',
        'label' => __('About Word', 'theme-two'),
        'type' => 'text',
        'priority' => 3
    ]);


    $customize->add_section('services_section',[
        'title' => __('Services Section', 'theme-two'),
        'description' => __('Services Options description', 'theme-two'),
        'priority' => 50,
    ]);
    
    $customize->add_setting('service_word');

    $customize->add_control('service_word',[
        'section' => 'services_section',
        'label' => __('Word Services', 'theme-two'),
        'type' => 'text',
        'priority' => 1
    ]);

    $customize->add_setting('service_text');

    $customize->add_control('service_text',[
        'section' => 'services_section',
        'label' => __('Text Services', 'theme-two'),
        'type' => 'text',
        'priority' => 2
    ]);



    
    $customize->add_setting('client_word');

    $customize->add_control('client_word',[
        'section' => 'services_section',
        'label' => __('Text Services', 'theme-two'),
        'type' => 'text',
        'priority' => 4
    ]);


    
    $customize->add_setting('client_text');

    $customize->add_control('client_text',[
        'section' => 'services_section',
        'label' => __('Text Services', 'theme-two'),
        'type' => 'text',
        'priority' => 5
    ]);


    $customize->add_setting('contact_text');

    $customize->add_control('contact_text',[
        'section' => 'services_section',
        'label' => __('Text Contact', 'theme-two'),
        'type' => 'text',
        'priority' => 6
    ]);

    $customize->add_setting('contact_word');

    $customize->add_control('contact_word',[
        'section' => 'services_section',
        'label' => __('Contact Word', 'theme-two'),
        'type' => 'text',
        'priority' => 7
    ]);

    $customize->add_setting('contact_email');

    $customize->add_control('contact_email',[
        'section' => 'services_section',
        'label' => __('Contact Email', 'theme-two'),
        'type' => 'text',
        'priority' => 8
    ]);

    $customize->add_setting('contact_address');

    $customize->add_control('contact_address',[
        'section' => 'services_section',
        'label' => __('Contact Address', 'theme-two'),
        'type' => 'text',
        'priority' => 9
    ]);

    $customize->add_setting('contact_numbers');

    $customize->add_control('contact_numbers',[
        'section' => 'services_section',
        'label' => __('Contact Numbers', 'theme-two'),
        'type' => 'text',
        'priority' => 10
    ]);


    $customize->selective_refresh->add_partial('about_word', [
        'selector' => '#subhead'
    ]);
    $customize->selective_refresh->add_partial('about_word_text', [
        'selector' => '#display-1'
    ]);
    $customize->selective_refresh->add_partial('about_word2', [
        'selector' => '.lead'
    ]);
    $customize->selective_refresh->add_partial('service_word', [
        'selector' => '#service_do'
    ]);

    $customize->selective_refresh->add_partial('service_text', [
        'selector' => '#service_text'
    ]);


    $customize->selective_refresh->add_partial('client_word', [
        'selector' => '#client_text'
    ]);

    $customize->selective_refresh->add_partial('client_text', [
        'selector' => '#client_word'
    ]);

    $customize->selective_refresh->add_partial('contact_text', [
        'selector' => '#contact_text'
    ]);


    $customize->selective_refresh->add_partial('contact_word', [
        'selector' => '#contact_word'
    ]);

    $customize->selective_refresh->add_partial('contact_email', [
        'selector' => '.contact-email'
    ]);


    $customize->selective_refresh->add_partial('contact_address', [
        'selector' => '.contact-address'
    ]);

    $customize->selective_refresh->add_partial('contact_numbers', [
        'selector' => '.contact-numbers'
    ]);

    $customize->add_setting('work_title');

    $customize->add_control('work_title',[
        'section' => 'services_section',
        'label' => __('Work Title', 'theme-two'),
        'type' => 'text',
        'priority' => 11
    ]);
    $customize->add_setting('work_content');

    $customize->add_control('work_content',[
        'section' => 'services_section',
        'label' => __('Work Content', 'theme-two'),
        'type' => 'text',
        'priority' => 12
    ]);
    
    $customize->selective_refresh->add_partial('work_title', [
        'selector' => '#work_title'
    ]);

    $customize->selective_refresh->add_partial('work_content', [
        'selector' => '#work_content'
    ]);
}
add_action( 'customize_register', 'mytheme_customize');