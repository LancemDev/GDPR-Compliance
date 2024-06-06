<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplianceLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'acitivity_type',
        'activity_description',
        'performed_by',
        'performed_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
