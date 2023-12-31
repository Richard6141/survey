<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Survey extends Model
{
     use HasFactory, HasUuid;

    protected $guarded = [];

    protected $casts = [
        'id' => 'string',
        'user_id' => 'string',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
