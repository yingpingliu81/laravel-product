<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string("slug")->nullable();
            $table->string('thumbnail')->nullable();
            $table->tinyInteger("type")->default(0)->comment("0: news, 2: faq 3: blog");
            $table->date('published_at');
            $table->tinyInteger('is_active')->default(1)->comment('0: pending, not show to customer.');
            $table->integer('sort')->default(0)->comment('controller the order of blog lists, desc');
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
        Schema::dropIfExists('blogs');
    }
}
