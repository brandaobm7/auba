<?php

namespace App\Models;

use OwenIt\Auditing\Models\Audit as BaseAudit;
use App\Models\User;

class Audit extends BaseAudit
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
