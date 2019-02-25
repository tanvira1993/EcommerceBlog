<?php

namespace App\Http\Middleware;

use Closure;
use Response;
use DB;
use App\User;
use Validator;
use Illuminate\Http\Request;

class UserMiddleware
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
        /*if ($request->user() && $request->user()->type != 0)
        {
            return new Response(view('unauthorized')->with('id_user_roles', 0));
        }*/
        // exit();
        // pritn "faasdffds";
        // if(true){
        //   // return Response::json(['heading' => 'Access Denied', 'message' => 'Please check header data such as idRoles, idProjects and idUserRoles'], 403); 
        // }
        // print_r($request->user());
        $user =  $request->user();

        return Response::json(['heading' => 'Access Denied', 'message' => $user], 403);
        return $next($request);
    }
}
