<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypePayment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'type_payments';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function book(){
        return $this->belongsToMany(Book::class,'sales');
    }

    public function costumer(){
        return $this->belongsToMany(Costumer::class,'sales');
    }

    public function employer(){
        return $this->belongsToMany(Employer::class,'sales');
    }
}
