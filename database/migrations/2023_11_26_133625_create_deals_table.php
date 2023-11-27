<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->string('title', 150);
            $table->string('description', 500);
            $table->integer('investor_id')->index();
            $table->integer('deal_value');
            $table->integer('pipeline_id')->default(1);
            $table->date('expected_closing_date');
            $table->integer('status')->default(0)->comment("0 for open 1 for close 2 for won");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deals');
    }
};
