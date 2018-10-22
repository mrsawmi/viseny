<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablos', function (Blueprint $table) {
            $table->increments('tablo_id');
            $table->string('tablo_img');
            $table->integer('tablo_user_id')->default(0);
            $table->string('tablo_title');
            $table->string('tablo_caption');
            $table->string('tablo_painter');
            $table->integer('tablo_price')->default(0);
            $table->string('tablo_category')->nullable();
            $table->string('tablo_color_tag')->nullable();
            $table->integer('tablo_view_count')->default(0);
            $table->integer('tablo_sells_count')->default(0);
            $table->integer('tablo_status')->default(0);
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
        Schema::dropIfExists('tablos');
    }
}
