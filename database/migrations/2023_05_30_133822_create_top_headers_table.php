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
        Schema::create('top_headers', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('number');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('nstagram');
            $table->string('pins');
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
        Schema::dropIfExists('top_headers');
    }
};
