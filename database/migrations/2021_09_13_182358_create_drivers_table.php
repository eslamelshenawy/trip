<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string("firstName");
            $table->string("lastName");
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('telephone')->unique();
            $table->date('birthdate');
            $table->string('nationality');
            $table->string('carType');
            $table->string('carModel');
            $table->integer('capacity');
            $table->string('skiBox');
            $table->text('file');
            $table->text('fileLicenseInput');
            $table->text('criminalRecord');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
