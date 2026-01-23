<?php 

function base_path(string $path) 
{
    return __DIR__ . DIRECTORY_SEPARATOR . $path;
}

function dd($var)
{
    ob_clean();
    echo $var;
    die();
}

function url(string $url): string
{
    return '/'. $url;
}