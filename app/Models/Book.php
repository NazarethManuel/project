<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'books';

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function supplier(){
        return $this->belongsToMany(Supplier::class,'books_suppliers');
    }

    public function costumer(){
        return $this->belongsToMany(Costumer::class,'sales');
    }

    public function employer(){
        return $this->belongsToMany(Employer::class,'sales');
    }

    public function typePayment(){
        return $this->belongsToMany(typePayment::class,'sales');
    }
}
