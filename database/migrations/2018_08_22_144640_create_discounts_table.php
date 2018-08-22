<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('presentation');
            $table->integer('make_id', 0, 1);
            $table->string('code');
            $table->float('discount');
            $table->string('code1');
            $table->string('code2');
            $table->string('code3');
            $table->timestamp('from_date')->nullable();
            $table->timestamp('to_date')->nullable();
            $table->boolean('state')->default(1);
            $table->timestamps();

            $table->foreign('make_id')->references('id')->on('makes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discounts');
    }
}
