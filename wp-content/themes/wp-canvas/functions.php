<?php

define('SITE_URL','http://www.github.com/thinkholic');
define('SITE_TITLE','WP DevReady');
define('DEV_SITE_URI','http://www.github.com/thinkholic');
define('DEV_NAME','@_thinkholic');
define('ADMIN_EMAIL','me@thinkholic.com');
define('ADMIN_NAME','thinkholic');
define('DEV_YEAR','2015');
define('TEXTDOMAIN','WPCanvas');

/*
 * Load jQuery
 */
if ( !is_admin() )
{
   wp_deregister_script('jquery');
   wp_register_script('jquery', ("http://code.jquery.com/jquery-latest.js"), false);
   wp_enqueue_script('jquery');
}

/*
 * Clean up the <head>
 */
function removeHeadLinks()
{
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

/*
 * Remove WP version no 
 */
function th_remove_version()
{
    return '';
}
add_filter('the_generator', 'th_remove_version');

/**
 * Include custom functions set
 * @ sidebars, admin, theme-support, other
 */
include_once('inc/functions-sidebar.php');
//include_once('inc/functions-admin.php');
include_once('inc/functions-custom.php');
include_once('inc/functions-theme-supports.php');
//include_once('inc/functions-custom-admin-sections.php');
//include_once('inc/functions-custom-general-settings.php');

/**
 * Post Types
 */
include_once('inc/post-type-sample.php');

// EOF.