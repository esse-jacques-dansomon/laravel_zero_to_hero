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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->double('amount');
            $table->timestamps();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('location_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('payments', function(Blueprint $table){
            $table->dropForeign(['user_id', 'location_id']);
        });
        Schema::dropIfExists('payments');
    }
};
