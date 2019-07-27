<?php

namespace App\Http\Middleware;

use Closure;
use Config;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // we want secret key to not be false in case the default value gets 
        // used and an attacker simply passes in false in the header
        $secret_key = $request->header('secret_key');
        if ($secret_key !== false &&
            $secret_key === Config::get('key', false)) {
            return $next($request);    
        }

        abort(404);
    }
}
