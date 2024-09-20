<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Banco extends Model implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'titulo',
        'cor_titulo',
        'descricao',
        'exibir',
        'imagem',
        'video',
        'titulo_link',
        'cor_link',
        'link',
        'bg_cor',
        'bg_imagem',
        'id_user'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }
}
