<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{

    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user && $user->isAdmin()) {
            // المستخدم admin، يسمح بالوصول
            return $next($request);
        } elseif ($user) {
            // المستخدم مسجل دخول لكنه عادي
            return redirect()->route('welcome');
        } else {
            // غير مسجل دخول
            return redirect()->route('login');
        }
    }
}
