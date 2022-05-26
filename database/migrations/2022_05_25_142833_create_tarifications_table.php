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
    public function up()
    {
        Schema::create('tarifications', function (Blueprint $table) {
            $table->id();
            $table->double('price');
            $table->timestamps();
            //foreigkeys
            $table->foreignId('article_id')->constrained();
            $table->foreignId('duree_location_id')->constrained();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tarifications', function (Blueprint $table){
            $table->dropForeign('article_id');
            $table->dropForeign('duree_location_id');
        });
        Schema::dropIfExists('tarifications');
    }
};
