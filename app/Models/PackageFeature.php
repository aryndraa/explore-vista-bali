<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PackageFeature extends Model
{
    /** @use HasFactory<\Database\Factories\PackageFeatureFactory> */
    use HasFactory;

    protected $fillable = [
        'package_id',
        "name",
        'is_include'
    ];

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }
}
