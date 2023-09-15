<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Hive extends Model
{
    use HasFactory;

    /**
    * Se recupera el apiario
    */

    protected $fillable = ['name', 'apiary_id'];

    public function apiary(): BelongsTo
    {
        return $this->belongsTo(Apiary::class);
    }

    /**
     * Se recupera el dispositivo
     */
    public function device(): HasOne
    {
        return $this->hasOne(Device::class);
    }
}
