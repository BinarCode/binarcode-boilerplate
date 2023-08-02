<?php

/**
 * @return Str
 */

use Illuminate\Contracts\Auth\Authenticatable;

if (! function_exists('str')) {
    /**
     * @return Str
     */
    function str()
    {
        return resolve(Str::class);
    }
}

if (! function_exists('user')) {
    function user(): Authenticatable
    {
        return Auth::user();
    }
}

if (! function_exists('tests_path')) {
    /**
     * Get the path to the tests folder.
     */
    function tests_path(string $path = ''): string
    {
        return app('path.base')
            .DIRECTORY_SEPARATOR.'tests'
            .($path !== '' && $path !== '0' ? DIRECTORY_SEPARATOR.$path : $path);
    }
}

if (! function_exists('withoutProtocol')) {
    /**
     * Get the url without protocol
     */
    function withoutProtocol(string $fqdn = ''): string
    {
        return str_replace(['https://', 'http://'], ['https://' => '', 'http://' => ''], $fqdn);
    }
}
