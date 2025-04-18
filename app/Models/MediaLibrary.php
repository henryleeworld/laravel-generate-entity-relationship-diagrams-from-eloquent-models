<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaLibrary extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['created_at', 'updated_at'];
}
