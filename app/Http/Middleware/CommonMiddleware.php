<?php

namespace App\Http\Middleware;

use Closure;
use Response;
use DB;
use App\User;
use Validator;
use Illuminate\Http\Request;

class CommonMiddleware
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
        $idUserRole = $request->header('iduserrole');
        $idUser = $request->header('iduser');
        $token = $request->header('token');
        
        
        if($idUserRole ==1 || $idUserRole == 2)
        {
            return $next($request);

        }
        else
        {
            return Response::json(['heading' => 'Access Denied, Login First!!', 'message' => $idUserRole], 403);

        }

        
    }
}
