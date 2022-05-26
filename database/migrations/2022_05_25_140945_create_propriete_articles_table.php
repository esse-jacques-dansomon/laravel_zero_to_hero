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
        Schema::create('propriete_articles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('isRequired')->default(1);
            $table->timestamps();
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
        Schema::create('propriete_articles', function (Blueprint $table) {
            $table->dropForeign('type_article_id');
        });
        Schema::dropIfExists('propriete_articles');
    }
};
