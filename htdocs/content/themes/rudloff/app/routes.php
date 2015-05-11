<?php

/**
 * Routes
 * 
 * PHP version 5.6
 * 
 * @category Template
 * @package  RudloffTheme
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @license  GPL http://www.gnu.org/copyleft/gpl.html
 * @link     https://rudloff.pro/
 */

Route::get(
    'page',
    array(
        'portfolio',
        function () {
            return View::make('portfolio');
        }
    )
);
Route::any(
    'page',
    function () {
        return View::make('home');
    }
);
