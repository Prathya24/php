<?php
/**
 * Plugin Name: interview_1
 * Description: This plugin creates a custom post type and taxonomy.
 * Version: 1.0
 * Author: Prathamesh
 */

 if (!defined('ABSPATH')) {
    exit;
}

require_once(plugin_dir_path(__FILE__) . 'includes/interview_function.php');

function interview_1_init() {
    return new interview_main();
}
add_action('plugins_loaded', 'interview_1_init');

