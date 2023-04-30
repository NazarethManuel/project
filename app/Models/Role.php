<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'roles';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function employer(){
        return $this->belongsToMany(Employer::class,'employers_roles');
    }
}