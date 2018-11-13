<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastName', 128);
            $table->string('firstName', 128);
            $table->integer('sex');
            $table->dateTime('birthday');
            $table->string('motherLastName', 128);
            $table->string('motherFirstName', 128);
            $table->string('fatherLastName', 128);
            $table->string('fatherFirstName', 128);
            $table->double('height')->nullable();
            $table->double('weight')->nullable();
            $table->double('chestSize')->nullable();
            $table->double('headSize')->nullable();
            $table->string('hospital', 256)->nullable();
            $table->integer('weather')->nullable();
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
        Schema::dropIfExists('children');
    }
}
