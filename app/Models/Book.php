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

    public function supplier()
    {
        return $this->belongsToMany(
            Supplier::class,
            'books_suppliers',
            'fk_books_id',
            'fk_suppliers_id'
        );
    }

    public function costumer()
    {
        return $this->belongsToMany(
            Costumer::class,
            'sales',
            'fk_books_id',
            'fk_costumers_id'
        );
    }

    public function employer()
    {
        return $this->belongsToMany(
            Employer::class,
            'sales',
            'fk_books_id',
            'fk_employers_id'
        );
    }

    public function typePayment()
    {
        return $this->belongsToMany(
            TypePayment::class,
            'sales',
            'fk_books_id',
            'fk_typePayments_id'
        );
    }
}
