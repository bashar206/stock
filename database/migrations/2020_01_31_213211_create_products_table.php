<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pimg')->nullable();
            $table->integer('pcode');
            $table->integer('subcatid');
            $table->string('yard');
            $table->string('amount');
            $table->string('ks')->nullable();
            $table->string('kss')->nullable();
            $table->string('ksss')->nullable();
            $table->string('total');
            $table->integer('staffid');
            $table->date('swdate');
            $table->integer('skolorid');
            $table->string('famount');
            $table->date('fdate');
            $table->string('fpimg')->nullable();
            $table->string('cartoon');
            $table->string('sroom');
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
        Schema::dropIfExists('products');
    }
}
