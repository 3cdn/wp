<?php
/*
Plugin Name: 3CDN Platform
Description: 🪄 Replace all wp-content URLs with 3CDN URLs to serve static content from 3CDN Platform saving you precious bandwidth and speeding up your website.
Version: 0.1
Author: 3CDN
Author URI: https://3cdn.xyz
*/

add_filter('the_content', 'encode_urls_in_content');

function encode_urls_in_content($content) {
    $pattern = '/https?:\/\/(?:www\.)?[^\/]+\/wp-content\/[^"]+/i';

    preg_match_all($pattern, $content, $matches);

    if (!empty($matches)) {
        foreach ($matches[0] as $url) {
            $encoded_url = base64_encode($url);

            $new_url = 'https://3cdn.io/f/' . $encoded_url;
            $content = str_replace($url, $new_url, $content);
        }
    }

    return $content;
}
