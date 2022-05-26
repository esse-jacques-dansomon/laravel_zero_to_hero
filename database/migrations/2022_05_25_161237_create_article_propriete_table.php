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
        Schema::create('article_propriete', function (Blueprint $table) {
            $table->foreignId('article_id')->constrained();
            $table->foreignId('propriete_article_id')->constrained();
            $table->string('value');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() : void
    {
        Schema::table('article_propriete', function (Blueprint $table){
            $table->dropForeign('article_id');
            $table->dropForeign('propriete_article_id');
        });
        Schema::dropIfExists('article_propriete');
    }
};
