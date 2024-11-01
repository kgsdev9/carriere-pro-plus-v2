<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotePrestataire extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'prestataire_id',
        'note',
        'commentaire',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
