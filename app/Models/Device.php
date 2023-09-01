<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Device extends Model
{
    use HasFactory;
    protected $fillable = [
    	'name',
    	'functionality',
    	'state',
    ];

    /**
    * Se recupera la colmena
    */
    public function hive(): BelongsTo
    {
        return $this->belongsTo(Hive::class);
    }

    /**
    * Se recupera todos los datos generados por el dispositivo
    */
    public function data(): HasMany
    {
        return $this->hasMany(Data::class);
    }
}
