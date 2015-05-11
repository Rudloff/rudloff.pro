<?php

/**
 * Application config
 * 
 * PHP version 5.6
 * 
 * @category Template
 * @package  RudloffTheme
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @license  GPL http://www.gnu.org/copyleft/gpl.html
 * @link     https://rudloff.pro/
 */
Asset::add('rudloff', themosis_assets().'/css/style.css');

add_action(
    'init',
    function () {
        add_post_type_support('page', 'excerpt');
    }
);

PostType::make('work', 'Works', 'Work')->set(
    array(
        'menu_icon'=>'dashicons-format-aside',
        'supports'=>array('thumbnail', 'title', 'editor')
    )
);
