<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersRolesTable extends Migration
{

    public function up()
    {
        Schema::create('employers_roles', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('fk_employers_id');
            $table->foreign('fk_employers_id')->references('id')
            ->on('employers')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_roles_id');
            $table->foreign('fk_roles_id') ->references('id')
            ->on('roles')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('employers_roles');
    }
}
