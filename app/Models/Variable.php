<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Variable extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'measure',
    ];

     /**
    * Se recupera todos los datos donde esta la variable
    */
    public function data(): HasMany
    {
        return $this->hasMany(Data::class);
    }
}
