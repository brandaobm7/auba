<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForceWWW
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (strpos($request->getHost(), 'www.') === false) {
            $url = $request->fullUrl();
            $wwwUrl = preg_replace('/^https?:\/\//', '$0www.', $url);

            return redirect()->to($wwwUrl, 301);
        }

        return $next($request);
    }
}
