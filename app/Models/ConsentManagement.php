<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsentManagement extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_consent',
        'consent_date',
        'consent_purpose',
        'consent_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
