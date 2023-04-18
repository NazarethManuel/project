<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookSupplier extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = "books_suppliers";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];


    public function book()
    {
        return $this->belongsTo(Book::class, 'fk_books_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'fk_suppliers_id');
    }
}
