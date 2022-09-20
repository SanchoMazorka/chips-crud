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
        Schema::create('chips', function (Blueprint $table) {
						$table->increments('id');
						$table->integer('client');
            $table->string('nim');
            $table->string('sim');
            $table->string('carrier');
            $table->string('comment')->nullable();
            $table->string('user');
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
        Schema::drop('chips');
    }
};