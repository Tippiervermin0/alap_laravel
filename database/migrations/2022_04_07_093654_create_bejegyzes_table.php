<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBejegyzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bejegyzesek', function (Blueprint $table) {
            $table->id();
            $table->integer('tevekenyseg_id');            
            $table->integer('osztaly_id');          
            $table->string('allapot', 255);
            
            $table->foreign('tevekenyseg_id')->references('tevekenyseg_id')->on('tevekenyseg');
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
        Schema::dropIfExists('bejegyzesek');
    }
}
