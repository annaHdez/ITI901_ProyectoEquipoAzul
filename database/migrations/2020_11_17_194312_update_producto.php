<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProducto extends Migration
{

    public function up()
    {
        //
        Schema::table('producto', function (Blueprint $table) {
            $table->string('descripcion');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('producto', function (Blueprint $table) {
            $table->dropColumn('descripcion');
        });
    }
}
