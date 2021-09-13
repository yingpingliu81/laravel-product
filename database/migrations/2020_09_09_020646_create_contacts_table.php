<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->tinyInteger('type')->default(0)->comment("0: contact, 1: warranty, 2: product review");
            $table->string('company',100)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('email',50)->nullable();
            $table->string('address',100)->nullable();
            $table->date('purchase_at')->nullable();
            $table->string('installer_info')->nullable();
            $table->string('purchase_location')->nullable();
            $table->string('model_number',50)->nullable();
            $table->string('sku_number', 20)->nullable();
            $table->string('product_name', 100)->nullable();
            $table->string('age_group', 100)->nullable();
            $table->string('occupation', 100)->nullable();
            $table->string('reasons', 100)->nullable();
            $table->string('way_to_hear', 100)->nullable();
            $table->string('travel_frequency', 100)->nullable();
            $table->text('message')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
