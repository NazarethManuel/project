<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    public $table = "user_roles";
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'fk_users_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'fk_roles_id');
    }

}
