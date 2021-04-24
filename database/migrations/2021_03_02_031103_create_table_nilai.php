<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_nilai', function (Blueprint $table) {
            $table->id("id_nilai");
            $table->string("id_siswa");
            $table->string("lat1");
            $table->string("lat2");
            $table->string("lat3");
            $table->string("uk1");
            $table->string("uk2");
            $table->string("id_pelajaran");
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
        Schema::dropIfExists('table_nilai');
    }
}
