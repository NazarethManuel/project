<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'employers';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function role(){
        return $this->belongsToMany(Role::class,'employers_roles');
    }
}
