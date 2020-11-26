<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Usuario1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Agregamos por migración un usuario administrador para correr el sistema de manera normal
        DB::statement("INSERT INTO users(name,email,password,rol_id) VALUES('Rafael Vázquez','rafa.vz.rrf3@gmail.com','12345678',1)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Borramos los registros
        DB::statement("TRUNCATE users");
    }
}
