<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HiveCard extends Model
{
    protected $hives = 'hives';

    protected $fillable = [
        'id',
        'name',
    ];
}