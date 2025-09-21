<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PackageActivity extends Model
{
    /** @use HasFactory<\Database\Factories\PackageActivityFactory> */
    use HasFactory;

    protected $fillable = [
        'package_id', 
        'name', 
        'duration', 
        'additional_price'
    ];

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }
}
