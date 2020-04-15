<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Header;

class CreateTableHeader extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fondo',255)->default('default.png');
            $table->string('logo',255)->default('default.png');
            $table->string('title',100);
            $table->text('descripcion');
            $table->rememberToken();
            $table->timestamps();
        });

        
        Header::create([
            'title' => 'Arepa 305',
            'descripcion' => 'SOMOS EL PRIMER FOOD TRUCK DE COMIDA VENEZOLANA UBICADO EN HOMESTEAD - FLORIDA.',
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('headers');
    }
}
