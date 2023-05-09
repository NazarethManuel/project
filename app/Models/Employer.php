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



    public function book()
    {
        return $this->belongsToMany(
            Book::class,
             'sales',
             'fk_employers_id',
             'fk_books_id'
            );
    }

    public function costumer()
    {
        return $this->belongsToMany(
            Costumer::class,
             'sales',
             'fk_employers_id',
             'fk_costumers_id'
            );
    }

    public function typePayment()
    {
        return $this->belongsToMany(
            TypePayment::class,
             'sales',
             'fk_employers_id',
             'fk_typePayments_id'
            );
    }
}
