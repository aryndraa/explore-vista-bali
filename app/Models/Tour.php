<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tour extends Model
{
    /** @use HasFactory<\Database\Factories\TourFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}
