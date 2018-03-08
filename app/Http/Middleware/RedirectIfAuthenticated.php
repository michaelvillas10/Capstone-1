<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Employee;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) 
        {
            $employee = Employee::all();
            foreach ($employee as $key => $employees) 
        {
               
            
            if ($employees->position == 'Administrative Staff' ) 
            {
                return redirect('/home');
            }
            elseif($employees->position == 'Lawyer')
            {
                return redirect('/lawyerside/show');
            }
        }
            
        }

        return $next($request);
    }
}
