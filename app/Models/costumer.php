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

    public function book()
    {
        return $this->belongsToMany(
            Book::class,
             'sales',
             'fk_costumers_id',
             'fk_books_id'
            );
    }

    public function user()
    {
        return $this->belongsToMany(
            User::class,
             'sales',
             'fk_costumers_id',
             'fk_user_id'
            );
    }

    public function typePayment()
    {
        return $this->belongsToMany(
            TypePayment::class,
             'sales',
             'fk_costumers_id',
             'fk_typePayments_id'
            );
    }
}
