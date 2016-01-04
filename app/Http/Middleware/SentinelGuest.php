<?php
/**
 * Created by PhpStorm.
 * User: mpica
 * Date: 04/01/2016
 * Time: 17:14
 */

namespace App\Http\Middleware;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Closure;

class SentinelGuest
{

    public function handle($request, Closure $next)
    {
       // dd(Sentinel::check());

        if(!Sentinel::check())
        {
            return('non longgato');

         // return redirect()->route('home');
        }
        else
        {

        return $next($request);
        }

    }

}