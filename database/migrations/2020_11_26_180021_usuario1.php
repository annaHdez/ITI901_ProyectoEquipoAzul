<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        DB::statement("INSERT INTO rol(nombre,estatus) VALUES('Administrador',1)");
        DB::statement("INSERT INTO rol(nombre,estatus) VALUES('Cliente',1)");
        DB::statement("INSERT INTO categoria(nombre,estatus) VALUES('Casual',1)");
        $password = Hash::make('12345678');
        DB::statement("INSERT INTO users(name,email,password,created_at,rol_id) VALUES('Rafael Vázquez','rafa.vz.rrf3@gmail.com','".$password."','2020-11-26 19:39:07',1)");
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Borramos los registros
        DB::statement("TRUNCATE rol");
        DB::statement("TRUNCATE categoria");
        DB::statement("TRUNCATE users");
    }
}
