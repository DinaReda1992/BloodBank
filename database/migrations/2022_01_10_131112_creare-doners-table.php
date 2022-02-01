<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreareDonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doners', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('secondName');
            $table->string('thirdName');
            $table->string('lastName')->nullable();
            $table->Integer('age');
            $table->string('mobile');
            $table->string('address')->nullable();
            $table->string('bloodType');
            $table->timestamp('lastDonate')->nullable();
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
        Schema::dropIfExists('doners');
    }
}
