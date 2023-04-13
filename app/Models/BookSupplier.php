<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookSupplier extends Model
{
    use SoftDeletes;
    use HasFactory;
    public function book()
    {
        return $this->belongsTo(Book::class('fk_books_id'));
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class('fk_suppliers_id'));
    }


}
