<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factors', function (Blueprint $table) {
            $table->increments('factor_id');
            $table->integer('factor_order_id');
            $table->string('factor_user_fullName');
            $table->string('factor_company_name')->default('VisenyArt');
            $table->integer('factor_product_id');
            $table->integer('factor_price')->default(0);
            $table->integer('factor_order_product_status');
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
        Schema::dropIfExists('factors');
    }
}
