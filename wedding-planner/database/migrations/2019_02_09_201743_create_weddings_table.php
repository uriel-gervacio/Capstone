<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeddingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('weddings');

        Schema::create('weddings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hashID')->nullable();
            $table->string('brideFirstName');
            $table->string('brideLastName');
            $table->string('brideAddress');
            $table->string('brideCity');
            $table->string('brideState');
            $table->string('brideZipCode');
            $table->string('brideEmail');
            $table->string('bridePhoneNumber');
            $table->string('groomFirstName');
            $table->string('groomLastName');
            $table->string('groomAddress');
            $table->string('groomCity');
            $table->string('groomState');
            $table->string('groomZipCode');
            $table->string('groomEmail');
            $table->string('groomPhoneNumber');
            $table->string('weddingDate');
            $table->time('weddingTime');
            $table->string('rehearsalDate')->nullable();
            $table->time('rehearsalTime')->nullable();
           // $table->string('coupleUserName');
            //$table->char('couplePassword',32);
            //---Ceremony Details---//
            $table->string('matrimonyType')->nullable();
            $table->boolean('unityCandle')->nullable();
            $table->boolean('sideCandles')->nullable();
            $table->string('litSideCandles')->nullable();
            $table->string('firstReading')->nullable();
            $table->string('firstReader')->nullable();
            $table->string('secondReading')->nullable();
            $table->string('secondReader')->nullable();
            $table->string('gospel')->nullable();
            $table->string('faithPrayer')->nullable();
            $table->string('thirdReader')->nullable();
            $table->string('giftPresenter')->nullable();
            $table->boolean('flowersToMoms')->nullable();
            $table->string('minister')->nullable();
            $table->string('altarCompanion')->nullable();
            $table->boolean('conclusion')->nullable();
            $table->string('florist')->nullable();
            $table->string('photographer')->nullable();
            $table->string('videographer')->nullable();
            $table->string('additionalInfo')->nullable();
            $table->string('flowerGirl')->nullable();
            $table->string('ringBearer')->nullable();
            $table->string('altarServers')->nullable();
            $table->boolean('grandparents')->nullable();
            $table->string('gmEscort')->nullable();
            $table->string('gpEscort')->nullable();
            $table->string('runner')->nullable();

            //Music
            $table->string('prelude')->nullable();
            $table->string('lighting')->nullable();
            $table->string('bridesmaids')->nullable();
            $table->string('preparation')->nullable();
            $table->string('bridal')->nullable();
            $table->string('eucharist')->nullable();
            $table->string('gloria')->nullable();
            $table->string('communion')->nullable();
            $table->string('responsorialPsalm')->nullable();
            $table->string('visitation')->nullable();
            $table->string('gospelSong')->nullable();
            $table->string('recessional')->nullable();
            $table->boolean('coupleComplete')->nullable();
            $table->boolean('adminComplete')->nullable();

            //participants
            $table->string('bestMan')->nullable();
            $table->string('brideOfHonor')->nullable();
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
        Schema::dropIfExists('weddings');
    }
}
