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
        Schema::create('gpinters', function (Blueprint $table) {
            $table->id('id');
            $table->string('numero',100)->nullable();
            $table->string('service',100)->nullable();
          
            $table->timestamps();
            $table->softDeletes();


           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gpinters');
    }
};
