<?php

namespace Beyoyndcreation\Inspire\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->admin) {
            App::setLocale('en');
            return $next($request);
        }
        return redirect('/')->with('error','You do not have admin access');
        // return redirect('/admin')->with('error', "The current user doesn't have admin access.");
    }
}
