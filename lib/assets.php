<?php

namespace SixCpa\Assets;

function asset_path($filename) {
    $path = get_template_directory_uri() . '/assets/';
    $directory = dirname($filename) . '/';
    $file = basename($filename);
    
    return $path . $directory . $file;
}