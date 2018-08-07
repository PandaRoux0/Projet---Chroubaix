<?php 

class scrollspy extends WP_Widget
{
    public function __construct()
    {
        $widget_args = array(
            'classname' => 'class-wp-scrollspy-widget',
            'description' => 'Permet la sélection d\'un article au choix'
        );

        $control_args = array(
            'width' => 250
        );
        
        parent::__construct('spy','scrollspy', widget_args, control_args);
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

?>