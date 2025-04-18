<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['name', 'created_at', 'updated_at'];

    /**
     * Get the role users for the role.
     */
    public function roleUsers(): HasMany
    {
        return $this->hasMany(RoleUser::class);
    }
}
