<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150);
            $table->string('author', 150);
            $table->string('publisher', 150);
            $table->string('isbn', 13);
            $table->string('quantity');
            $table->string('price');
            $table->softDeletes();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
