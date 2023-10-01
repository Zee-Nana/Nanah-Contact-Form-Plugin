<?php
/*
Plugin Name: Nanah Contact Form
Description: Easily add and customize contact forms on your website.
Version: 1.0
Author: Zee Nanah
*/

// Register the shortcode to display the contact form
function ncf_contact_form_shortcode($atts, $content = null) {
    ob_start();
    include 'contact-form-template.php';
    return ob_get_clean();
}
add_shortcode('nanah_contact_form', 'ncf_contact_form_shortcode');

// Enqueue CSS and JS files
function ncf_enqueue_scripts() {
    // Enqueue Bootstrap CSS from a CDN
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css', array(), '5.5.0');

    // Enqueue your custom CSS
    wp_enqueue_style('ncf-style', plugins_url('nanah-contact-form.css', __FILE__));

    // Enqueue jQuery and Bootstrap JS from CDNs
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js', array('jquery'), '5.5.0', true);

    // Enqueue your custom JavaScript
    wp_enqueue_script('ncf-script', plugins_url('nanah-contact-form.js', __FILE__), array('jquery'), '1.0', true);

    // Localize the script to access WordPress AJAX URL
    wp_localize_script('ncf-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'ncf_enqueue_scripts');

// Include form processing logic
include 'contact-form-handler.php';
