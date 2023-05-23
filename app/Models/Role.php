<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'user_roles',
            'fk_roles_id',
            'fk_users_id'
        );
    }
}
