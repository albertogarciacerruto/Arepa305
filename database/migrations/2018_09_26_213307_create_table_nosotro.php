<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Nosotro;

class CreateTableNosotro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nosotros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',20);
            $table->text('descripcion1');
            $table->text('descripcion2');
            $table->string('foto1',255)->default('default.png');
            $table->string('red1',20);
            $table->string('red2',20);
            $table->rememberToken();
            $table->timestamps();
        });


        Nosotro::create([
            'title' => 'SOBRE NOSOTROS',
            'descripcion1' => 'Who are in extremely love with eco friendly system. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'descripcion2' => 'SIGUENOS EN NUESTRAS REDES SOCIALES:',
            'red1' => '@AREPA305',
            'red2' => 'AREPA305',

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nosotros');
    }
}
