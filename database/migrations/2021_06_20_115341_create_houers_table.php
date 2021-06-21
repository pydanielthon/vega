<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houers', function (Blueprint $table) {
            $table->id();
            $table->integer('contrahents_id')->unsigned();
            $table->integer('workers_id')->unsigned();

            $table->date('data');
            $table->float('houers');
            $table->boolean('corrections');
            $table->foreign('contrahents_id')->references('id')->on('contrahents')->onDelete('cascade');
            $table->foreign('workers_id')->references('id')->on('workers')->onDelete('cascade');

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
        Schema::dropIfExists('houers');
    }
}
