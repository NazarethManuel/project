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
}
