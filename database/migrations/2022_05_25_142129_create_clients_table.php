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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->char('sex');
            $table->date('birthdate');
            $table->string('birthPlace');
            $table->string('nationality');
            $table->string('city');
            $table->string('country');
            $table->string('NCI');
            $table->string('noNCI')->unique();
            $table->string('phone1')->unique();
            $table->string('phone2')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
