<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = "Sales";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];


    public function book()
    {
        return $this->belongsTo(Book::class, 'fk_books_id');
    }

    public function costumer()
    {
        return $this->belongsTo(Costumer::class, 'fk_costumers_id');
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class, 'fk_employers_id');
    }

    public function typePayment()
    {
        return $this->belongsTo(TypePayment::class, 'fk_typePayments_id');
    }
}
