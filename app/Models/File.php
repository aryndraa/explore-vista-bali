<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class File extends Model
{
    protected $fillable = [
        'file_name',
        'file_type',
        'file_size',
        'file_path',
        'file_url',
        'related_id',
        'related_type',
    ];

    public function related(): MorphTo
    {
        return $this->morphTo();
    }
}
