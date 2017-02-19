<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('authors', 1020)->nullable();
            $table->boolean('is_published')->default(1);
            $table->date('published')->nullable();
            $table->string('title')->nullable();
            $table->string('publication')->nullable();
            $table->string('doi')->nullable();
            $table->string('link')->nullable();
            $table->text('abstract')->nullable();
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
        Schema::dropIfExists('publications');
    }
}
