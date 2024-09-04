<?php 

const PATH_ROOT = __DIR__ . '/';

if (!function_exists('url')) {
    function url($uri = null) {
        return $_ENV['BASE_URL'] . $uri;
    }
}