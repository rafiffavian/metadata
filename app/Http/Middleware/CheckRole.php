<?php

namespace App\Http\Middleware;

use Closure;
use App\Simrole;
use App\Http\Controllers\Admin\SimController;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if($request->user()->myrole->name == 'Admin' || SimController::checkPriv($role, $request->user()->id_role)->permission == '1'){

            return $next($request);
        }
       return redirect('/index');
    }
}
