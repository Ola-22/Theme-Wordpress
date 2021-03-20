<?php

class Mythme_Testimonial_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'mytheme-testimonial-widget',
            'Testimonial Widget',
            [
                'description' => 'Display the about text!'
            ]
            );
    }
    public function form($instance)
    {
        $content = isset($instance['content'])? $instance['content'] : '';
        $author = isset($instance['author'])? $instance['author'] : '';
        $category = isset($instance['category'])? $instance['category'] : '';
        printf('<p><label for="%s">Content:</label>', $this->get_field_id('content') );
        printf('<input class="widefat" type="text" name="%s" id="%s" value="%s"></p>',
        $this->get_field_name('content'),
        $this->get_field_id('content'),
        $content
    );

    printf('<p><label for="%s">Author:</label>', $this->get_field_id('author') );
    printf('<textarea class="widefat" rows="5" type="text" name="%s" id="%s">%s</textarea></p>',
    $this->get_field_name('author'),
    $this->get_field_id('author'),
    $author
);

printf('<p><label for="%s">Category:</label>', $this->get_field_id('category') );
printf('<input class="widefat" type="text" name="%s" id="%s" value="%s"></p>',
$this->get_field_name('category'),
$this->get_field_id('category'),
$category
);

$content2 = isset($instance['content2'])? $instance['content2'] : '';
$author2 = isset($instance['author2'])? $instance['author2'] : '';
$category2 = isset($instance['category2'])? $instance['category2'] : '';
printf('<p><label for="%s">Content2:</label>', $this->get_field_id('content2') );
printf('<input class="widefat" type="text" name="%s" id="%s" value="%s"></p>',
$this->get_field_name('content2'),
$this->get_field_id('content2'),
$content2
);

printf('<p><label for="%s">Author2:</label>', $this->get_field_id('author2') );
printf('<textarea class="widefat" rows="5" type="text" name="%s" id="%s">%s</textarea></p>',
$this->get_field_name('author2'),
$this->get_field_id('author2'),
$author2
);
printf('<p><label for="%s">Category2:</label>', $this->get_field_id('category2') );
printf('<input class="widefat" type="text" name="%s" id="%s" value="%s"></p>',
$this->get_field_name('category2'),
$this->get_field_id('category2'),
$category2
);


$content3 = isset($instance['content3'])? $instance['content3'] : '';
$author3 = isset($instance['author3'])? $instance['author3'] : '';
$category3 = isset($instance['category3'])? $instance['category3'] : '';

printf('<p><label for="%s">Content3:</label>', $this->get_field_id('content3') );
printf('<input class="widefat" type="text" name="%s" id="%s" value="%s"></p>',
$this->get_field_name('content3'),
$this->get_field_id('content3'),
$content3
);
printf('<p><label for="%s">Author3:</label>', $this->get_field_id('author3') );
printf('<textarea class="widefat" rows="5" type="text" name="%s" id="%s">%s</textarea></p>',
$this->get_field_name('author3'),
$this->get_field_id('author3'),
$author3
);
printf('<p><label for="%s">Category3:</label>', $this->get_field_id('category3') );
printf('<input class="widefat" type="text" name="%s" id="%s" value="%s"></p>',
$this->get_field_name('category3'),
$this->get_field_id('category3'),
$category3
);


    }
    public function widget($args, $instance)
    {

        echo '<div class="row testimonials narrow">

        <div class="col-full testimonials__slider" data-aos="fade-up">

            <div class="testimonials__slide">';
        printf('<p>%s</p>', $instance['content']);
        echo '<div class="testimonials__author">';
        printf('<p>%s</p>', $instance['author']);
        printf('<span>%s</span>', $instance['category']);
        echo '</div></div>';
        echo $args['after_widget'];


        echo '

        <div class="testimonials__slide">';
        printf('<p>%s</p>', $instance['content2']);
        echo '<div class="testimonials__author">';
        printf('<p>%s</p>', $instance['author2']);
        printf('<span>%s</span>', $instance['category2']);
        echo '</div></div>';
        echo $args['after_widget'];


        echo '

        <div class="testimonials__slide">';
        printf('<p>%s</p>', $instance['content3']);
        echo '<div class="testimonials__author">';
        printf('<p>%s</p>', $instance['author3']);
        printf('<span>%s</span>', $instance['category3']);
        echo '</div></div>';
        echo $args['after_widget'];

        echo '</div>';

    }
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}