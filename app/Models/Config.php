<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Config extends Model implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'titulo',
        'rodape',
        'email',
        'phone',
        'facebook',
        'instagram',
        'tiktok',
        'linkedin',
        'twitter',
        'youtube',
        'google',
        'endereco',
        'whatsapp',
        'analytcs',
        'maps',
        'pixel',
        'download',
        'description',
        'keywords',
        'atendimento',
        'site',
        'imagem'
    ];
}
