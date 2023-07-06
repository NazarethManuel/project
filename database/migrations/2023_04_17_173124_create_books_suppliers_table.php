<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksSuppliersTable extends Migration
{

    public function up()
    {
        Schema::create('books_suppliers', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('fk_books_id');
            $table->foreign('fk_books_id')->references('id')
            ->on('books')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_suppliers_id');
            $table->foreign('fk_suppliers_id') ->references('id')
            ->on('suppliers')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books_suppliers');
    }
}
