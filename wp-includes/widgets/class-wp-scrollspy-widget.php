<?php 

/*
Plugin Name: Scrollspy
Plugin URI: 
Description: PLugin permettant la sélection d'un article 
Version: 0.1
Author: Midnight Falcon
Author URI: http://votre-site.com
License: GPL2
*/

class scrollspy extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('spy','scrollspy' ,array('description' => 'Menu permettant de sélectionner l\'article de votre choix sur une page.'));
    }

    public function widget($args,$instance){
        echo 'widget scrollspy';
    }

    public function update($new_instance,$old_instance)
    {

    }

    public function form($instance)
    {
        $title = isset($instance['title']) ? $instance['title'] : '';
        ?>
    <p>
        <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo  $title; ?>" />
    </p>
    <?php
    }
}

function init_scrollspy_widget(){
    register_widget('scrollspy');
}

add_action( 'widgets_init', 'init_scrollspy_widget');
?>