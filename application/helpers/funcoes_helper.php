<?php
defined('BASEPATH') or exit('No direct script access allowed');


if (!function_exists('config_upload')) {
    function config_upload($path='./upload', $types = 'jpg|png|gif|jpeg', $size = 4096)
    {
        $config['upload_path'] = $path;
        $config['allowed_types'] = $types;
        $config['max_size'] = $size;
        return $config;
    }
}