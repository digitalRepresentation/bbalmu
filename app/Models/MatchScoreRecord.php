<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchScoreRecord extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'starcraft_id', 'ppp_win', 'ppp_lose', 'ppt_win', 'ppt_lose', 'ppz_win', 'ppz_lose', 'ptz_win', 'ptz_lose',
                            'other_win', 'other_lose', 'p_win', 'p_lose', 't_win', 't_lose', 'z_win', 'z_lose', 'all_win', 'all_lose'];
}
