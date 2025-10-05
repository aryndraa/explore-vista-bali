<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property int $id
 * @property string $file_name
 * @property string $file_type
 * @property int $file_size
 * @property string $file_path
 * @property string $file_url
 * @property string $related_type
 * @property int $related_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $related
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereFileSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereFileType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereFileUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereRelatedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
