<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class AdminMiddleware
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth= $auth;
    }

    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       
       /* if (auth()->check() && auth()->user())
        return $next($request);

        return redirect('/');
        if(!$request->user()->hasRole($role)){
                return redirect('/');
        }
        return $next($request);*/
    
        dd($this->auth->user());
 
        return $next($request);
    }
  
}
