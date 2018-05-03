<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->String('type');
            $table->String('no_of_persons');
            $table->date('no_of_beds');
            $table->String('bathrooms');
            $table->String('no');
            $table->String('street');
            $table->String('city');
            $table->String('zipcode');
            $table->date('photo1');
            $table->String('photo2');
            $table->String('summery');
            $table->String('title');
            $table->String('status');
            $table->String('date');
            $table->String('contact_no');
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('properties');
    }
}
