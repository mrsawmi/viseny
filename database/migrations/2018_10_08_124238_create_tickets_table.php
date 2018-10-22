<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments(' ticket_id');
            $table->integer('ticket_user_id');
            $table->integer('ticket_tablo_id')->default(0);
            $table->string('ticket_email');
            $table->integer('ticket_priority')->default(0);
            $table->string('ticket_title');
            $table->string('ticket_content');
            $table->string('ticket_attach')->nullable();
            $table->integer('ticket_status')->default(0);
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
        Schema::dropIfExists('tickets');
    }
}
