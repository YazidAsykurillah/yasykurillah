<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class ProjectImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booted(): void
    {
        static::deleted(function ($model) {
            if ($model->path) {
                Storage::disk('public')->delete($model->path);
            }
        });

        static::updating(function ($model) {
            if ($model->isDirty('path')) {
                $oldPath = $model->getOriginal('path');
                if ($oldPath) {
                    Storage::disk('public')->delete($oldPath);
                }
            }
        });
    }

    public function portfolio(): BelongsTo
    {
        return $this->belongsTo(Portfolio::class);
    }
}
