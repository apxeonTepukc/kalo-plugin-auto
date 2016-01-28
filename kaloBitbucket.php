<?php
/*
Plugin Name: Kalo test plugin
Plugin URI: http://harabejkov.info/
Description: A simple test plugin for bitbucket update
Version: 1.1
Author: Harabejkov
Author URI: http://harabejkov.info/
*/

add_action('init','helloKalo');

function helloKalo() {
    echo '<span style="color: darkred;">Hello master Kalo, may the force be with you, because you just updated the plugin!</span>';
}

require_once( 'BFIGitHubPluginUploader.php' );
if ( is_admin() ) {
    new WPFDGitHubPluginUpdater( __FILE__, 'apxeonTepukc', "kalo-plugin-auto" );
}