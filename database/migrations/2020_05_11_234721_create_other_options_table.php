<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('other_option_categorie_id')->constrained() ->nullable();
            $table->string('reference');
            $table->unsignedInteger('price');
            $table->boolean('choose')->default(0);
            $table->string('libele');
            $table->unsignedInteger('qantite');
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
        Schema::dropIfExists('other_options');
    }
}
