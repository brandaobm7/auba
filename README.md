<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# WebSites BM7
Projeto web com gerenciador de conteúdo com login, senha, cadastro de usuários e alimentação de conteúdo.

## Pré Requisitos

Certifique que tenha esses programas instalados no computador:
- Git Laragon ou Docker
- Git versão 2.4 ou superior
- PHP versão 8.2 ou 8.3
- Composer versão 2.7 ou superior
- Nodejs versão 20.1 ou superior

### Habilitar as extensões no arquivo php.ini
```
extension=zip
extension=fileinfo
extension=curl
extension=openssl
extension=gd
extension=mysqli
extension=pdo_mysql
extension=pdo_pgsql
extension=pdo_sqlite
extension=pgsql
extension=sqlite3
extension=mbstring
```

## Instalação do Laravel:

- [Laravel - The PHP Framework For Web Artisans](https://laravel.com/)

```
composer create-project laravel/laravel:^11.0 example-app
```

## Auditing

Fazer a instalação do auditing:
- **[Laravel Auditing | Laravel Auditing (laravel-auditing.com)](https://laravel-auditing.com/)**

```
composer require owen-it/laravel-auditing
```

Adicionar provider:
```
OwenIt\Auditing\AuditingServiceProvider::class,
```

Fazer Publicação:
```
php artisan vendor:publish --provider "OwenIt\Auditing\AuditingServiceProvider" --tag="config"
```

Criar migração:
```
php artisan vendor:publish --provider "OwenIt\Auditing\AuditingServiceProvider" --tag="migrations"
```

Fazer migração:
```
php artisan migrate
```

## DataTable

Fazer instalação do DataTable:
- **[YajraBox - Arjay Angeles | Laravel & DataTables](https://yajrabox.com/docs/laravel-datatables/11.0/quick-starter)**

```
composer require yajra/laravel-datatables
```

Adicionar provider:
```
Yajra\DataTables\DataTablesServiceProvider::class,
```

## Helpers

Criar arquivo app/helpers.php

Adicionar linha no composer:
```
"files":["app/helpers.php"]
```

Atualizar autoload:
```
composer dump-autoload
```

## Forçar WWW

Criar um middleware
```
php artisan make:middleware ForceWWW
```

Editar o middleware:
```
<?php

namespace App\Http\Middleware;

use Closure;

class ForceWWW
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
        if (strpos($request->getHost(), 'www.') === false) {
            $url = $request->fullUrl();
            $wwwUrl = preg_replace('/^https?:\/\//', '$0www.', $url);

            return redirect()->to($wwwUrl, 301);
        }

        return $next($request);
    }
}
```

Registrar o middleware
```
\App\Http\Middleware\ForceWWW::class,
```

## Animate.css

Animações css para apoio de layout:

https://animate.style/

https://wowjs.uk/docs.html

## Servidor

Inserir as seguintes configurações no env
```
DB_CHARSET=utf8mb4
DB_COLLATION=utf8mb4_unicode_ci
```
Apontamento da Pasta
```
ln -s nomedapasta/public/ public_html
```

htaccess:
```
    # Forçar erro 404 para index.php
    RewriteCond %{THE_REQUEST} ^GET.*index\.php [NC]
    RewriteRule ^index\.php(.*)$ /error-404 [R=404,L]

    RewriteCond %{HTTP_HOST} !^www\. [NC]
    RewriteRule ^(.*)$ http://www.%{HTTP_HOST}/$1 [R=301,L]

<IfModule mod_headers.c>
    Header always set X-Frame-Options "DENY"
    Header unset X-Turbo-Charged-By
    Header unset Platform
    Header unset X-Powered-By
    
    Header unset Alt-Svc
    Header unset Sec-Ch-Ua-Arch
    Header unset Sec-Ch-Ua-Bitness
    Header unset Sec-Ch-Ua-Full-Version
    Header unset Sec-Ch-Ua-Full-Version-List
    Header unset Sec-Ch-Ua-Mobile
    Header unset Sec-Ch-Ua-Model
    Header unset Sec-Ch-Ua-Platform
    Header unset Sec-Ch-Ua-Platform-Version
</IfModule>
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
