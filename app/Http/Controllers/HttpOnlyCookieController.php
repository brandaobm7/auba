<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class HttpOnlyCookieController extends Controller
{
    public function setCookie()
    {
        // Gera um token de autenticação aleatório
        $authToken = Str::random(60);

        // Cria o cookie com o valor do token de autenticação
        $cookie = Cookie::make(
            'auth_token',      // Nome do cookie
            $authToken,        // Valor do cookie (token de autenticação)
            60,                // Duração do cookie em minutos
            null,              // Caminho (null para usar o padrão '/')
            null,              // Domínio (null para usar o domínio atual)
            true,              // Secure (true para HTTPS)
            true,              // HttpOnly (true para não ser acessível via JavaScript)
            false,             // Raw (false para codificar o valor)
            'Strict'           // SameSite (pode ser 'Lax', 'Strict' ou 'None')
        );

        // Retorna uma resposta com o cookie definido
        return response('Cookie de autenticação definido')->withCookie($cookie);
    }
}
