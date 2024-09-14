<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeBoard extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'writer_id', 'views'];

    public function user()
    {
        return $this->belongsTo(User::class, 'writer_id', 'id');
    }

}
