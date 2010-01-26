<?php
if ( function_exists('register_sidebar') )
   register_sidebars(2, array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3>',
    ));
?>
