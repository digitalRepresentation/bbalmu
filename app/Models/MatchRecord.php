<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchRecord extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'writer_id', 'id');
    }
}
