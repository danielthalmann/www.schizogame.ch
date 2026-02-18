<?php 

/**
 * return base path
 * @param string $path
 * @return string
 */
function base_path(string $path) 
{
    return __DIR__ . DIRECTORY_SEPARATOR . $path;
}

/**
 * display $var and die
 * @param mixed $var
 * @return never
 */
function dd($var)
{
    ob_clean();
    var_dump($var);
    die();
}

/**
 * format url
 * @param string $url
 * @return string
 */
function url(string $url): string
{
    return protocol() . $_SERVER['HTTP_HOST'] . '/' . $url;
}

/**
 * return current protocol 'https://' or 'http://'
 * @return string
 */
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

/**
 * build menu
 * @param mixed $text
 * @param mixed $url
 * @return void
 */
function menu($text, $url)
{
?>

<li class=" border-2 m-2 border-neutral-200 bg-white rounded-xl lg:border-none lg:bg-transparent">
    <a href="<?php echo $url; ?>" class="block py-2 pl-3 pr-4 text-[#50bd21] hover:text-[#50bd21] visited:text-[#50bd21]  lg:text-neutral-800 lg:hover:text-neutral-800 lg:visited:text-neutral-800 rounded lg:bg-transparent lg:p-0" aria-current="page"><?php echo $text; ?></a>
</li>

<?php
}

/**
 * render component
 * @param string $name
 * @param array $var
 * @return bool|string
 */
function component(string $name, array $var = [])
{
    

    ob_start();
    
    $_component_name = implode(DIRECTORY_SEPARATOR, explode('.', $name));
    
    extract($var);
    include(base_path('components' . DIRECTORY_SEPARATOR . $_component_name . '.php'));

    $out = ob_get_contents();
    
    ob_end_clean();

    return $out;

}

/**
 * redirect page
 * @param mixed $location
 * @return void
 */
function redirect($location)
{
    ob_clean();
    header('Location: ' . $location, true, 301);
    exit();
}

/**
 * return request value
 * @param mixed $name
 * @param mixed $default
 */
function request($name, $default = null)
{
    return $_POST[$name] ?? $_GET[$name] ?? $default;
}

/**
 * return request value escaped
 * @param mixed $name
 * @param mixed $default
 */
function request_esc($name, $default = null)
{
    return htmlentities(request($name, $default));
}

/**
 * return array of request value escaped
 */
function request_all()
{
    return array_merge($_POST, $_GET);
}

/**
 * return array of request value escaped
 * @return string[]
 */
function request_all_esc()
{
    $req = request_all();

    array_walk($req, function (&$item, $key) {
        $item = htmlentities($item);
    });
    
    return $req;
}

