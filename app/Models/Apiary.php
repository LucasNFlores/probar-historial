<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Apiary extends Model
{
    use HasFactory;

    protected $fillable = ['name','location','latitude','longitude'];

    /**
    * Se recupera el usuario
    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
    * Se recupera todas las colmenas del apiario
    */

    public function hives(): HasMany
    {
        return $this->hasMany(Hive::class);
    }


}
