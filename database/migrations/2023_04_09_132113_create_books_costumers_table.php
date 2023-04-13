<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksCostumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_costumers', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_books_id');
            $table->foreign('fk_books_id')->references('id')->on('books')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_costumers_id');
            $table->foreign('fk_costumers_id')->references('id')->on('costumers')->onDelete('CASCADE')->onUpgrade('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books_costumers');
    }
}
