<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $queue
 * @property string $payload
 * @property boolean $attempts
 * @property int $reserved_at
 * @property int $available_at
 * @property int $created_at
 */
class Job extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['queue', 'payload', 'attempts', 'reserved_at', 'available_at', 'created_at'];

}
