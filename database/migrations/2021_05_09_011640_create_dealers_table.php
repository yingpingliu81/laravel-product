<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->string("address");
            $table->tinyInteger("type")->default(0)->comment("0: dealers, 1: installers, 2: batteries dealers");
            $table->string("phone",20)->nullable();
            $table->string("fax",20)->nullable();
            $table->string("mobile", 20)->nullable();
            $table->string("email",50)->nullable();
            $table->string("website",100)->nullable();
            $table->string("lat",20)->nullable();
            $table->string("lng",20)->nullable();
            $table->string("suburb",100)->nullable();
            $table->string("state",10)->nullable();
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
        Schema::dropIfExists('dealers');
    }
}
