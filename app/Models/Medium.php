<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Medium extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['model_type', 'model_id', 'collection_name', 'name', 'file_name', 'mime_type', 'disk', 'size', 'manipulations', 'custom_properties', 'responsive_images', 'posted_at', 'order_column', 'created_at', 'updated_at', 'uuid', 'conversions_disk'];

    /**
     * Get the posts for the medium.
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'thumbnail_id');
    }
}
