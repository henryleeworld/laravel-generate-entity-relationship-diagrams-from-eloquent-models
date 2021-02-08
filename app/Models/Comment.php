<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $author_id
 * @property int $post_id
 * @property string $content
 * @property string $posted_at
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property Post $post
 */
class Comment extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['author_id', 'post_id', 'content', 'posted_at', 'created_at', 'updated_at'];

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
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
