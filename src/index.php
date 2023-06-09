<?php
/*
Plugin Name: 3CDN Platform
Description: 🪄 Replace all wp-content URLs with 3CDN URLs to serve static content from 3CDN Platform saving you precious bandwidth and speeding up your website.
Version: 0.5
Author: 3CDN
Author URI: https://3cdn.io
*/

add_filter('the_content', 'encode_urls_in_content', 11);

function encode_urls_in_content($content) {
    // Parse WPBakery shortcodes before processing the content
    if (function_exists('do_shortcode')) {
        $content = do_shortcode($content);
    }

    $pattern = '/(https?:\/\/(?:www\.)?[^\/]+\/wp-content\/[^"\'\s]+)/i';

    preg_match_all($pattern, $content, $matches);

    if (!empty($matches)) {
        foreach ($matches[0] as $url) {
            $clean_url = rtrim($url, ');'); // This cleans up URLs that are set by Elementor in the background-url CSS.

            $encoded_url = base64_encode($clean_url);

            $new_url = 'https://3cdn.io/f/' . $encoded_url;
            $content = str_replace($url, $new_url, $content);
        }
    }

    return $content;
}
