<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CloudService extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'account_linked',
        'resource_monitoring_status',
        'compliance_check_status',
    ];

    protected $casts = [
        'account_linked' => 'boolean',
    ];
}
