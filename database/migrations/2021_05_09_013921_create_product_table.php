<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title");
            $table->string("sku",20);
            $table->string("slug")->nullable();
            $table->string("price",20)->nullable();
            $table->string("thumb",100)->nullable();
            $table->string("software")->nullable();
            $table->tinyInteger("status")->default(0)->comment("0: active, 1: invisible, 2: delete");
            $table->text("images")->nullable();
            $table->text("content")->nullable()->comment("the full content including description, feature, specification, downloads");
            $table->text("intro")->nullable()->comment("brief introduction");
            $table->text("description")->nullable();
            $table->text("feature")->nullable();
            $table->text("specification")->nullable();
            $table->text("package")->nullable();
            $table->text("downloads")->nullable();
            $table->text("videos")->nullable();
            $table->integer("sort")->default(0)->comment("sort by desc");
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
        Schema::dropIfExists('product');
    }
}
