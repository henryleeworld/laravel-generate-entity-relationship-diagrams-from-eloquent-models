<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $email
 * @property string $created_at
 * @property string $updated_at
 */
class NewsletterSubscription extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['email', 'created_at', 'updated_at'];

}
