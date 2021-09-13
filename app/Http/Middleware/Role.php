<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App\Models\Admin;
use Illuminate\Http\Request;

class Role
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
        $admin = Admin::all()->first();
        // dd($admin['role']);
        // dd(Session::get('logged_in'));
        $status = Session::get('logged_in');
        if($status == 'logged_in'){
          return $next($request);
        }
        return redirect()->route('home');
      }
}
