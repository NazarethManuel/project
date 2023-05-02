<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Costumer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'costumers';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function book(){
        return $this->belongsToMany(Book::class,'sales');
    }

    public function employer(){
        return $this->belongsToMany(Employer::class,'sales');
    }

    public function typePayment(){
        return $this->belongsToMany(typePayment::class,'sales');
    }
}
