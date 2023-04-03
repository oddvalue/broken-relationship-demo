<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Client extends Model
{
    protected $fillable = [
        'name',
    ];

    public function agreement(): HasOne
    {
        return $this->hasOne(Agreement::class);
    }
}
