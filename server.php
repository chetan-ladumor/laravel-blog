<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';


// https://www.webslesson.info/2018/03/simple-login-system-in-laravel.html
// https://sujipthapa.co/blog/laravel-56-register-login-activation-with-username-or-email-support
// http://www.expertphp.in/article/how-to-implement-multi-auth-in-laravel-5-4-with-example
// https://justlaravel.com/wp-content/cache/all/custom-authentication-laravel/index.html
// https://justlaravel.com/wp-content/cache/all/middleware-laravel-content-restriction-user-role/index.html
