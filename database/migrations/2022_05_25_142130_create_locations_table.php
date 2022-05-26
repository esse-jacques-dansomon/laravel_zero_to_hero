<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->timestamps();
            //foreign keys
            $table->foreignId('status_location_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('client_id')->constrained();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('locations', function(Blueprint $table){
            $table->dropForeign(['client_id', 'user_id', 'status_location_id']);
        });
        Schema::dropIfExists('locations');
    }
};
