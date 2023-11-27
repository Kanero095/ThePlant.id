<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plant extends Model
{
    use HasFactory;

    public function getGamtaUrlAttribute()
    {
        return asset('storage/image/img/' . $this->attributes['gamta']);
    }

    protected $fillable = [
        'id',
        'nator',
        'email',
        'nowa',
        'nata',
        'lata',
        'gamta',
        'klatam',
        'katam',
        'lotam',
        'deletam',
        'desitam',
        'litam',
        'color',
        'verif',
        'verifer'
    ];
}
