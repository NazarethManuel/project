<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunctionsTable extends Migration
{

    public function up()
    {
        Schema::create('functions', function (Blueprint $table) {
            $table->id();
            $table->string('name',150);
            $table->string('previlege',150);
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('functions');
    }
}
