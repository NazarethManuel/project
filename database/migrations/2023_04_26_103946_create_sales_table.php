<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{

    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('quantity', 150);
            $table->string('total', 150);
            $table->string('paymentType', 150);
            $table->string('qtyTotal');
            $table->string('overallTotal', 150);

            $table->unsignedBigInteger('fk_books_id');
            $table->foreign('fk_books_id')->references('id')
            ->on('books')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_costumers_id');
            $table->foreign('fk_costumers_id')->references('id')
            ->on('costumers')->onDelete('CASCADE')->onUpgrade('CASCADE');


            $table->unsignedBigInteger('fk_users_id');
            $table->foreign('fk_users_id')->references('id')
            ->on('users')->onDelete('CASCADE')->onUpgrade('CASCADE');


            $table->unsignedBigInteger('fk_typePayments_id');
            $table->foreign('fk_typePayments_id')->references('id')
            ->on('type_payments')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
