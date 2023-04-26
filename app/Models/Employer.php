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

    public function book(){
        return $this->belongsToMany(Book::class,'sales');
    }

    public function costumer(){
        return $this->belongsToMany(Costumer::class,'sales');
    }
    
    public function typePayment(){
        return $this->belongsToMany(typePayment::class,'sales');
    }

}
