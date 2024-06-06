<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiskAssessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'dpi_step',
        'risk_level',
        'mitigation_recommendations',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
