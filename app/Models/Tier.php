<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'starcraft_name', 'tier', 'starcraft_race', 'ladder_score', 'created_at', 'updated_at'];

    public function masterTier() 
    {
        return $this->belongsTo(MasterTier::class, 'tier', 'id');
    }
    public function MatchScoreRecord() 
    {
        return $this->belongsTo(MatchScoreRecord::class, 'id', 'starcraft_id');
    }
}
