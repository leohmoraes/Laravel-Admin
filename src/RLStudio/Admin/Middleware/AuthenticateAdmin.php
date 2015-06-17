<?php

namespace RLStudio\Admin\Middleware;

use Closure;

class AuthenticateAdmin
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
        if (! \Admin::authenticate()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest(\Admin::loginUri());
            }
        }

        return $next($request);
    }
}
