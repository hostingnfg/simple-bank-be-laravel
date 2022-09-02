<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method create(array $attributes)
 */
class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'ownerId',
        'type',
        'balance',
        'currency',
        'active'
    ];
}
