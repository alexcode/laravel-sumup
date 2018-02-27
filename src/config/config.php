<?php

/*
 * This file is part of alexcode/laravel-sumup.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    /*
    |--------------------------------------------------------------------------
    | SumUp Client ID
    |--------------------------------------------------------------------------
    |
    | This Id is given by SumUp in https://me.sumup.com/developers
    |
    */

    'client_id' => env('SUMUP_CLIENT_ID'),

    /*
    |--------------------------------------------------------------------------
    | SumUp Secret
    |--------------------------------------------------------------------------
    |
    | This Secret is given by SumUp in https://me.sumup.com/developers
    |
    */

    'secret' => env('SUMUP_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | Redirect Uri
    |--------------------------------------------------------------------------
    |
    | The Redirect Uri after an OAuth request
    |
    */

    'redirect_uri' => env('SUMUP_REDIRECT'),

    /*
    |--------------------------------------------------------------------------
    | SumUp Version
    |--------------------------------------------------------------------------
    |
    | The SumUp API version
    |
    */

    'version' => env('SUMUP_VERSION', 'v0.1'),
];
