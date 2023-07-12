<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OperationType extends Model
{
    use HasFactory, HasUuid;

    protected $guarded = [];

    protected $casts = [
        'id' => 'string',
    ];
}
