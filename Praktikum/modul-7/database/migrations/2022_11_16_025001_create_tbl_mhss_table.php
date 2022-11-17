<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_mhss', function (Blueprint $table) {
            //nrp primary key not auto increment
            $table->integer('nrp', 10)->primary();
            $table->string('nama', 50);
            $table->text('alamat', 100);
            $table->string('email', 50);
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
        Schema::dropIfExists('tbl_mhss');
    }
};
