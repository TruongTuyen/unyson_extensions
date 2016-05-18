<?php
/**
 * Plugin Name: TruongTuyen_Toolkit
 * Plugin URI: http://wpdevtips.com
 * Description: Toolkit work with Unyson Framework
 * Version: 1.0.0
 * Author: TruongTuyen
 * Author URI: http://wpdevtips.com
 * License: GPL2+
 * Text Domain: truongtuyen
 */
//plugin language file
function yourextension_lang(){
    load_plugin_textdomain('yourextension', false, basename( dirname( __FILE__ ) ) . '/languages');
}
add_action('admin_head','yourextension_lang');


function _filter_yourextension_extension($locations) {
    $locations[dirname(__FILE__) . '/extensions'] = dirname( __FILE__ ) . 'extensions';
    return $locations;
}
add_filter('fw_extensions_locations', '_filter_yourextension_extension');