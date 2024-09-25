<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterTier extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'tier_name'];

    public function tier()
    {
        return $this->belongsTo(Tier::class);
    }
}
