<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $author_id
 * @property int $thumbnail_id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property string $posted_at
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property Medium $medium
 * @property Comment[] $comments
 */
class Post extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['author_id', 'thumbnail_id', 'title', 'slug', 'content', 'posted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'author_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medium()
    {
        return $this->belongsTo('App\Models\Medium', 'thumbnail_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
