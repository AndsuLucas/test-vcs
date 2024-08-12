<?php

namespace Andsudev\TestVcs;

use Closure;
class CheckRedisConnection
{
    public function handle($request, Closure $next)
    {
        echo 'Checking Redis Connection...';
        return $next($request);
    }
}