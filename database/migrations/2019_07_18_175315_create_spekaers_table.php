<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpekaersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spekaers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cpf',11)->unique();
            $table->string('name');
            $table->string('phone',11);
            $table->string('birth',7);
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
        Schema::dropIfExists('spekaers');
    }
}
