<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
 				if($request->user()->admin()){
 						return $next($request);
 				}else{
 						//dd("Acceso restringido. Usted no tiene acceso a esta sección.");
            abort(401);
 				}

 		}
}
