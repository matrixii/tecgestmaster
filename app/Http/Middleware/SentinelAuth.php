<?php
/**
 * Created by PhpStorm.
 * User: mpica
 * Date: 04/01/2016
 * Time: 17:46
 */

namespace App\Http\Middleware;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Closure;

class SentinelAuth
{

    public function handle($request, Closure $next)
    {
        // dd(Sentinel::check());

        if(!Sentinel::check())
        {
            return('non longgato 2');

            // return redirect()->route('home');
        }
        else
        {

            return $next($request);
        }

    }

}