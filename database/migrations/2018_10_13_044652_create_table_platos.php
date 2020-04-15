<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Plato;

class CreateTablePlatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);

            $table->string('arepa1',255)->default('default.png');
            $table->string('arepa2',255)->default('default.png');
            $table->string('arepa3',255)->default('default.png');
            $table->string('arepa4',255)->default('default.png');
            $table->string('arepa5',255)->default('default.png');
            $table->string('arepa6',255)->default('default.png');

            $table->string('desayuno1',255)->default('default.png');
            $table->string('desayuno2',255)->default('default.png');
            $table->string('desayuno3',255)->default('default.png');
            $table->string('desayuno4',255)->default('default.png');
            $table->string('desayuno5',255)->default('default.png');
            $table->string('desayuno6',255)->default('default.png');

            $table->string('cachapa1',255)->default('default.png');
            $table->string('cachapa2',255)->default('default.png');
            $table->string('cachapa3',255)->default('default.png');
            $table->string('cachapa4',255)->default('default.png');
            $table->string('cachapa5',255)->default('default.png');
            $table->string('cachapa6',255)->default('default.png');

            $table->string('hamburguesa1',255)->default('default.png');
            $table->string('hamburguesa2',255)->default('default.png');
            $table->string('hamburguesa3',255)->default('default.png');
            $table->string('hamburguesa4',255)->default('default.png');
            $table->string('hamburguesa5',255)->default('default.png');
            $table->string('hamburguesa6',255)->default('default.png');

            $table->string('hotd1',255)->default('default.png');
            $table->string('hotd2',255)->default('default.png');
            $table->string('hotd3',255)->default('default.png');
            $table->string('hotd4',255)->default('default.png');
            $table->string('hotd5',255)->default('default.png');
            $table->string('hotd6',255)->default('default.png');

            $table->string('empanada1',255)->default('default.png');
            $table->string('empanada2',255)->default('default.png');
            $table->string('empanada3',255)->default('default.png');
            $table->string('empanada4',255)->default('default.png');
            $table->string('empanada5',255)->default('default.png');
            $table->string('empanada6',255)->default('default.png');

            $table->string('pepito1',255)->default('default.png');
            $table->string('pepito2',255)->default('default.png');
            $table->string('pepito3',255)->default('default.png');
            $table->string('pepito4',255)->default('default.png');
            $table->string('pepito5',255)->default('default.png');
            $table->string('pepito6',255)->default('default.png');

            $table->string('parrilla1',255)->default('default.png');
            $table->string('parrilla2',255)->default('default.png');
            $table->string('parrilla3',255)->default('default.png');
            $table->string('parrilla4',255)->default('default.png');
            $table->string('parrilla5',255)->default('default.png');
            $table->string('parrilla6',255)->default('default.png');

            $table->string('patacon1',255)->default('default.png');
            $table->string('patacon2',255)->default('default.png');
            $table->string('patacon3',255)->default('default.png');
            $table->string('patacon4',255)->default('default.png');
            $table->string('patacon5',255)->default('default.png');
            $table->string('patacon6',255)->default('default.png');

            $table->string('bebida1',255)->default('default.png');
            $table->string('bebida2',255)->default('default.png');
            $table->string('bebida3',255)->default('default.png');
            $table->string('bebida4',255)->default('default.png');
            $table->string('bebida5',255)->default('default.png');
            $table->string('bebida6',255)->default('default.png');

            $table->rememberToken();
            $table->timestamps();
        });

        Plato::create([
            'title' => 'Platos Gastronomicos Venezolanos',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platos');
    }
}
