<?php
/*
-----------------------------------------------------------------------------------
    Copyright 2011  Abban Dunne  (email : himself@abandon.ie)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
-----------------------------------------------------------------------------------


Plugin Name: Stop SOPA Ireland
Plugin URI: http://abandon.ie/
Description: This is a plugin to allow a site to link to the stop SOPA Ireland sites
Version: 0.1
Author: Abban Dunne
Author URI: http://abandon.ie
License: GPL2
*/

/**
 * Add Sopa jQuery
 * 
 * Enqueues jQuery from the Google CDN
 * 
 */
function add_sopa_jquery(){
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, '1.7.1');
    wp_enqueue_script('jquery');
}
add_action('init', 'add_sopa_jquery');


/**
 * Add SOPA Menubar Header
 * 
 * Contains all the stuff needed in the site header
 * 
 */
function add_sopa_menubar_header(){
    echo '<link type="text/css" rel="stylesheet" href="' .WP_PLUGIN_URL .'/stop-sopa-ireland/menubar.css" />' . "\n";
}
add_action('wp_head', 'add_sopa_menubar_header');


/**
 * Add SOPA Menubar Footer
 * 
 * Contains all the stuff needed in the footer
 * 
 */
function add_sopa_menubar_footer(){
    echo '<div id="sopa_menubar">
            <ul>
                <li class="sopa_title"><strong>I SUPPORT STOP SOPA IRELAND!</strong></li>
                <li><a class="sopa_sign" href="http://stopsopaireland.com/"><strong>Sign the petition</strong></a></li>
                <li><a href="http://wordpress.org/extend/plugins/stop-sopa-ireland/">Download the menubar</a></li>
                <li><a href="http://www.tjmcintyre.com/2012/01/irelands-sopa-faq.html">FAQ</a></li>
            </ul>
        </div>';
    echo '<script type="text/javascript" src="' .WP_PLUGIN_URL .'/stop-sopa-ireland/script.js"></script>';
}
add_action('wp_footer', 'add_sopa_menubar_footer');




