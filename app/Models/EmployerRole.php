<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class EmployerRole extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = "employers_roles";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];


    public function employer()
    {
        return $this->belongsTo(Employer::class, 'fk_employers_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'fk_roles_id');
    }
}
