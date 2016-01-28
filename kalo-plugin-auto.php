<?php
/*
Plugin Name: Kalo test plugin
Plugin URI: http://harabejkov.info/
Description: A simple test plugin for bitbucket update
Version: 1.3
Author: Harabejkov
Author URI: http://harabejkov.info/
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/*require_once( 'BFIGitHubPluginUploader.php' );
if ( is_admin() ) {
    $instance = new WPFDGitHubPluginUpdater( __FILE__, 'apxeonTepukc', "kalo-plugin-auto" );
}*/

require 'plugin-update-checker/plugin-update-checker.php';
$className = PucFactory::getLatestClassVersion('PucGitHubChecker');
$myUpdateChecker = new $className(
    'https://github.com/apxeonTepukc/kalo-plugin-auto/',
    __FILE__,
    'master'
);

/* The plugin itself */
if (!is_admin()) {
    add_action('init','helloKalo');
}

function helloKalo() {
    echo '<span style="color: darkred;">Hello master Kalo, may the force be with you, because you just updated the plugin to 1.3!</span>';
}