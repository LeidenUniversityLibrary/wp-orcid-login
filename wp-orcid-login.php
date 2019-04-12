<?php
/*
Plugin Name: Login with ORCID
Plugin URI: https://github.com/LeidenUniversityLibrary/wp-orcid-login
Description: Set the text of the OpenID Connect login button to 'ORCID'
Version: 1.0.0
Author: bencomp
Author URI: https://ben.companjen.name
License: GPLv2 Copyright (c) 2019 Leiden University Libraries
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Register login button text update
 */
add_filter('openid-connect-generic-login-button-text', function( $text ) {
    $text = __('Login with ORCID');
    
    return $text;
});
