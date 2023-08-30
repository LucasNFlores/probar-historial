<?php

namespace App\Models;
//listo
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Data extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'value',
    ];

    /**
    * Se recupera el dispositivo
    */
    public function device(): BelongsTo
    {
        return $this->belongsTo(Device::class);
    }

    /**
    * Se recupera la variable
    */
    public function variable(): BelongsTo
    {
        return $this->belongsTo(Variable::class);
    }
}
