<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $model_type
 * @property integer $model_id
 * @property string $collection_name
 * @property string $name
 * @property string $file_name
 * @property string $mime_type
 * @property string $disk
 * @property integer $size
 * @property string $manipulations
 * @property string $custom_properties
 * @property string $responsive_images
 * @property string $posted_at
 * @property int $order_column
 * @property string $created_at
 * @property string $updated_at
 * @property string $uuid
 * @property string $conversions_disk
 * @property Post[] $posts
 */
class Medium extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['model_type', 'model_id', 'collection_name', 'name', 'file_name', 'mime_type', 'disk', 'size', 'manipulations', 'custom_properties', 'responsive_images', 'posted_at', 'order_column', 'created_at', 'updated_at', 'uuid', 'conversions_disk'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'thumbnail_id');
    }
}
