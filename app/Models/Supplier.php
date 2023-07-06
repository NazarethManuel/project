<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'suppliers';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class, 'books_suppliers', 'suppliers_id', 'books_id');
    }


}
