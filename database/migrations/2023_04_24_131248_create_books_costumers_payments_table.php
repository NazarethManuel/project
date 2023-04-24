<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksCostumersPaymentsTable extends Migration
{

    public function up()
    {
        Schema::create('books_costumers_payments', function (Blueprint $table) {
            $table->id();
            $table->string('quantity', 150);
            $table->string('total', 150);
            $table->string('type', 150);

            $table->unsignedBigInteger('fk_books_id');
            $table->foreign('fk_books_id')->references('id')
            ->on('books')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_costumers_id');
            $table->foreign('fk_costumers_id') ->references('id')
            ->on('costumers')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_payments_id');
            $table->foreign('fk_payments_id')->references('id')
            ->on('payments')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('books_costumers_payments');
    }
}
