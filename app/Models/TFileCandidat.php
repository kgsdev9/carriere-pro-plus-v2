<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TFileCandidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidature_id',
        'file'
    ];
}

