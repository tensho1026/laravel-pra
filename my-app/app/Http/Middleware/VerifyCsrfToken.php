<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/posts/create/nomalsql',
        '/posts/update/nomalsql',
        '/posts/delete/nomalsql',
        '/posts/bulk/nomalsql',
        '/posts/create/querybuilder',
        '/posts/get/querybuilder',
        '/posts/update/querybuilder',
        '/posts/delete/querybuilder',
        '/posts/filter/querybuilder',
        '/posts/count/querybuilder',
        '/posts/user/querybuilder',
        '/posts/eloquent',
        '/posts/eloquent/{id}'
    ];
}
