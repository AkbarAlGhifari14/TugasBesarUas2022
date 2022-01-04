<?php

namespace App\Http\Middleware;

use Closure;

class CheckHakAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$hakaksess)
    {
        if(in_array($request->user()->hak_akses,$hakaksess)){
        return $next($request);
        }
        return redirect('/');
    }
}
