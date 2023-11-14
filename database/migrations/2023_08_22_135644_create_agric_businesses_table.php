<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgricBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agric_businesses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->string('organizationName');
            $table->string('dealName');
            $table->string('dealPromoters');
            $table->text('dealDescription');
            $table->string('hasBusinessPlan');
            $table->string('focalStates');
            $table->string('ticketSize');
            $table->text('raiseAmount');
            $table->text('purpose');
            $table->json('preferredValueChain');
            $table->text('otherValueChains')->nullable();
            $table->string('pitchFile')->nullable();
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
        Schema::dropIfExists('agric_businesses');
    }
}
