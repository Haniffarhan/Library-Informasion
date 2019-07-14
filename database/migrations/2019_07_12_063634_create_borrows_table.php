<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->bigIncrements('id_borrow');
            $table->unsignedBigInteger('id_book')->unsigned();
            $table->unsignedBigInteger('id_user')->unsigned();
            $table->string('borrow_date_day');
            $table->string('borrow_date_month');
            $table->string('borrow_date_year');
            $table->string('return_date_day');
            $table->string('return_date_month');
            $table->string('return_date_year');
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
        Schema::dropIfExists('borrows');
    }
}
