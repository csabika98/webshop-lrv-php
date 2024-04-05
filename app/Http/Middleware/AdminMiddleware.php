<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
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
         // Retrieve the authenticated user
         $user = $request->user();
     
         // Check if the user exists and if their username is 'admin'
         if ($user && $user->name == 'admin') {
             // User is an admin, allow the request to proceed
             return $next($request);
         }
     
         // User is not an admin, deny the request with a 403 Forbidden response
         abort(403, 'Unauthorized');
     }}