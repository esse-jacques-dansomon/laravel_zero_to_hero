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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('noSerial')->unique();
            $table->boolean('isAvailable')->default(1);
            $table->string('imageUrl')->nullable();
            $table->timestamps();
            //foreign key
            $table->foreignId('type_article_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function(Blueprint $table){
            $table->dropForeign(['type_article_id']);
        });
        Schema::dropIfExists('articles');
    }
};
