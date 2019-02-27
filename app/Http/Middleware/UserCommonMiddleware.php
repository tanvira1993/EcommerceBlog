<?php

namespace App\Http\Middleware;

use Closure;
use Response;
use DB;
use App\User;
use Validator;
use Illuminate\Http\Request;

class UserCommonMiddleware
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
        /*$accessUrl = array(
            'admin'=> array('manageProduct','product/edit'),
            'supperAdmin'=> array()
        )*/
        
        if($idUserRole ==1 || $idUserRole == 2 || $idUserRole == 0)
        {
            return $next($request);

        }

        else
        {
            return Response::json(['heading' => 'Access Denied, Login First!!', 'message' => 'not Authorized'], 403);

        }

        // return Response::json(['heading' => 'Access Denied', 'message' => array('userRole'=>$idUserRole,'userInfo'=>$idUser,'token'=>$token)], 403);
        
    }
}
