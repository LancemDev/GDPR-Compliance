<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyPolicy extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_name',
        'company_website_url',
        'data_processing_activities',
        'generated_privacy_policy',
        'privacy_policy_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
