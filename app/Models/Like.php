<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $author_id
 * @property string $likeable_type
 * @property integer $likeable_id
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Likes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['author_id', 'likeable_type', 'likeable_id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'author_id');
    }
}
