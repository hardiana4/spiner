<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kinerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl',
        'foto',
        'doc',
        'hasil'
    ];
    protected $table = 'kinerja';
}
