<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HttpOnlyCookies
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $cookies = $response->headers->getCookies();

        foreach ($cookies as $cookie) {
            $newCookie = new \Symfony\Component\HttpFoundation\Cookie(
                $cookie->getName(),
                $cookie->getValue(),
                $cookie->getExpiresTime(),
                $cookie->getPath(),
                $cookie->getDomain(),
                $cookie->isSecure(),
                true, // HttpOnly
                $cookie->isRaw(),
                $cookie->getSameSite()
            );

            $response->headers->setCookie($newCookie);
        }

        return $response;
    }
}
