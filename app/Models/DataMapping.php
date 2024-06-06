<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMapping extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'data_flow',
        'cloud_services',
        'third_party_services',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
