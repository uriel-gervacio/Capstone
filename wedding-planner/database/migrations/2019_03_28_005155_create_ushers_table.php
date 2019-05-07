<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUshersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ushers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('wed_id');
            $table->foreign('wed_id')->references('id')->on('weddings');
            $table->string('usher')->nullable();
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
        Schema::dropIfExists('ushers');
    }
}
