<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tlog extends Model
{
    protected $table = 'tlog';

    protected $fillable = [
        'tanggal',
        'jam',
        'keterangan'
    ];
}
