<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersTable extends Migration
{

    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('telephone', 150);
            $table->string('address', 150);
            $table->string('email', 150);
            $table->string('nif', 150);
            $table->string('role', 150);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employers');
    }
}
