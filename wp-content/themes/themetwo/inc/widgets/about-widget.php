<?php

class Mythme_About_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'mytheme-about-widget',
            'About Widget',
            [
                'description' => 'Display the about text!'
            ]
            );
    }
    public function form($instance)
    {
        $title = isset($instance['title'])? $instance['title'] : '';
        $content = isset($instance['content'])? $instance['content'] : '';
        printf('<p><label for="%s">Title:</label>', $this->get_field_id('title') );
        printf('<input class="widefat" type="text" name="%s" id="%s" value="%s"></p>',
        $this->get_field_name('title'),
        $this->get_field_id('title'),
        $title
    );
    printf('<p><label for="%s">Content:</label>', $this->get_field_id('content') );
    printf('<textarea class="widefat" rows="5" type="text" name="%s" id="%s">%s</textarea></p>',
    $this->get_field_name('content'),
    $this->get_field_id('content'),
    $content
);


$title2 = isset($instance['title2'])? $instance['title2'] : '';
$content2 = isset($instance['content2'])? $instance['content2'] : '';
printf('<p><label for="%s">Title2:</label>', $this->get_field_id('title2') );
printf('<input class="widefat" type="text" name="%s" id="%s" value="%s"></p>',
$this->get_field_name('title2'),
$this->get_field_id('title2'),
$title2
);
printf('<p><label for="%s">Content2:</label>', $this->get_field_id('content2') );
printf('<textarea class="widefat" rows="5" type="text" name="%s" id="%s">%s</textarea></p>',
$this->get_field_name('content2'),
$this->get_field_id('content2'),
$content2
);


$title3 = isset($instance['title3'])? $instance['title3'] : '';
$content3 = isset($instance['content3'])? $instance['content3'] : '';
printf('<p><label for="%s">Title3:</label>', $this->get_field_id('title3') );
printf('<input class="widefat" type="text" name="%s" id="%s" value="%s"></p>',
$this->get_field_name('title3'),
$this->get_field_id('title3'),
$title3
);
printf('<p><label for="%s">Content3:</label>', $this->get_field_id('content3') );
printf('<textarea class="widefat" rows="5" type="text" name="%s" id="%s">%s</textarea></p>',
$this->get_field_name('content3'),
$this->get_field_id('content3'),
$content3
);



$title4 = isset($instance['title4'])? $instance['title4'] : '';
$content4 = isset($instance['content4'])? $instance['content4'] : '';
printf('<p><label for="%s">Title4:</label>', $this->get_field_id('title4') );
printf('<input class="widefat" type="text" name="%s" id="%s" value="%s"></p>',
$this->get_field_name('title4'),
$this->get_field_id('title4'),
$title4
);
printf('<p><label for="%s">Content4:</label>', $this->get_field_id('content4') );
printf('<textarea class="widefat" rows="5" type="text" name="%s" id="%s">%s</textarea></p>',
$this->get_field_name('content4'),
$this->get_field_id('content4'),
$content4
);
    }
    public function widget($args, $instance)
    {

        echo '<div class="row bit-narrow">
                
        <div class="about-process process block-1-2 block-tab-full">

            <div class="col-block item-process" data-aos="fade-up">
        <div class="item-process__text">';
        printf('<h4 class="item-title">%s</h4>', $instance['title']);
        printf('<p>%s</p>', $instance['content']);
        echo '</div></div>';
        echo $args['after_widget'];
        

        echo '<div class="col-block item-process" data-aos="fade-up">
        <div class="item-process__text">';
        printf('<h4 class="item-title">%s</h4>', $instance['title2']);
        printf('<p>%s</p>', $instance['content2']);
        echo '</div></div>';
        echo $args['after_widget'];

        echo '<div class="col-block item-process" data-aos="fade-up"><div class="item-process__text">';
        printf('<h4 class="item-title">%s</h4>', $instance['title3']);
        printf('<p>%s</p>', $instance['content3']);
        echo '</div></div>';
        echo $args['after_widget'];

        echo '<div class="col-block item-process" data-aos="fade-up"><div class="item-process__text">';
        printf('<h4 class="item-title">%s</h4>', $instance['title4']);
        printf('<p>%s</p>', $instance['content4']);
        echo '</div></div>';
        echo $args['after_widget'];

        echo '</div>';

    }
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}