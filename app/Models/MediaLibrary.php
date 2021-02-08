<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 */
class MediaLibrary extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at'];

}
