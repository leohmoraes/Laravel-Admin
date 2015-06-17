<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin access
    |--------------------------------------------------------------------------
    |
    | This is the method to check if a user has admin access. By default, this
    | is set to the default Auth::check() function which ships with Laravel.
    | You'll probably want to use something like Entrust to check for roles
    |
    */
    'admin_access' => Auth::check(),

    /*
    |--------------------------------------------------------------------------
    | Admin login uri
    |--------------------------------------------------------------------------
    |
    | This is the uri for your login page. This can either be a string or a
    | function returning a string. By default, this is set to the Laravel
    | default auth uri.
    |
    | If you don't want it hardcoded, you can also set it to
    | (new Http\Controllers\Auth\AuthController)->loginPath() or whatever your
    | Auth controller is named. Do note, however, that you muse implement
    | the AuthenticatesAndRegistersUsers trait for this to work (default)
    |
    */
    'login_uri' => '/auth/login',
];