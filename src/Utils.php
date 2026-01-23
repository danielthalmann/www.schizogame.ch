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
    return protocol() . $_SERVER['HTTP_HOST'] . '/' . $url;
}

function protocol()
{
    if (isset($_SERVER['HTTPS']) &&
        ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
        return 'https://';
    }
    else {
        return 'http://';
    }
}