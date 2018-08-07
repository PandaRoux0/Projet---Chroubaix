<?php 

/*
Plugin Name: ScrollSpy
Plugin URI: https://mon-siteweb.com/
Description: Ceci est mon premier plugin
Author: Mon nom et prénom ou celui de ma société
Version: 1.0
Author URI: http://mon-siteweb.com/
*/

class Scrollspy extends WP_Widget
{
    public function __construct()
    {   
        parent::__construct('spy','Scrollspy', array('description' => 'Widget permettant la sélection d\'une partie précise dans un article.'));
    }

    public function widget($args,$instance)
    {
        ?>
        <div id="id_article"></div>
        <?php
    }

    public function update($new_instance,$old_instance)
    {

    }

    public function form($instance)
    {
        $title = isset($instance['title']) ? $instance['title'] : '';
        ?>
    <p id="test">
        <label for="nb_section">Nombre de section (max: 20)</label>
        <input type="number"  name="nb_section" id="nb_section" min="1" max="20" />
        <input type="button" onclick="section()" name="check_nb_section" value="Valider" /></br>
    </p>
    <?php
    }
}

function init_scrollspy_widget(){
    register_widget('Scrollspy');
}
add_action( 'widgets_init', 'init_scrollspy_widget');
?>