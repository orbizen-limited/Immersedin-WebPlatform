<?php

// Prevent direct access to this file
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__));
    exit('Direct script access denied.'); 
}

/**
 * URL and Path Functions
 */

function get_site_url() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    return $protocol . '://' . $_SERVER['HTTP_HOST'];
}

function get_current_url() {
    return get_site_url() . $_SERVER['REQUEST_URI'];
}

function get_theme_file_url($path = '') {
    return get_site_url() . '/' . ltrim($path, '/');
}

/**
 * Template Functions
 */

/**
 * Load a template file from the core directory
 * 
 * @param string $template Name of the template file without .php extension
 * @return void
 */
function get_template($template) {
    include ABSPATH . '/common/' . $template . '.php';
}

/**
 * Generate clean URLs without .php extension
 * 
 * @param string $page Page name without .php extension
 * @param array $params Optional query parameters
 * @return string The clean URL
 */
function get_url($page, $params = []) {
    // Base URL
    $base_url = get_site_url();
    
    // Format the page path
    $path = ($page === 'index' || $page === '') ? '' : '/' . $page;
    
    // Add query parameters if any
    $query = '';
    if (!empty($params)) {
        $query = '?' . http_build_query($params);
    }
    
    return $base_url . $path . $query;
}

function core_url($page, $params = []) {
    // Base URL
    $base_url = get_site_url();
    
    
    return $base_url;
}




/**
 * Check if current page matches the given page
 * 
 * @param string $page Page name without .php extension
 * @return boolean True if current page matches
 */
function is_current_page($page) {
    // Get the current URL path
    $request_uri = $_SERVER['REQUEST_URI'];
    
    // Remove query string if present
    $path = parse_url($request_uri, PHP_URL_PATH);
    
    // Remove trailing slash if present
    $path = rtrim($path, '/');
    
    // Get the last part of the path (page name)
    $current_page = basename($path);
    
    // Handle home page
    if ($current_page == '' && $page == 'index') {
        return true;
    }
    
    // Handle cases where .php might still be in the URL
    $current_page = str_replace('.php', '', $current_page);
    
    return $current_page === $page;
}

/**
 * Generate an active class if current page matches
 * 
 * @param string $page Page name without .php extension
 * @param string $class CSS class to add if active
 * @return string CSS class if active, empty string otherwise
 */
function active_class($page, $class = 'active') {
    return is_current_page($page) ? ' ' . $class : '';
}
