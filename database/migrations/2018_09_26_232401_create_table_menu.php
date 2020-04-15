<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Menu;

class CreateTableMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',20);
            $table->string('name1',20);
            $table->string('name2',20);
            $table->string('name3',20);
            $table->string('name4',20);
            $table->string('name5',20);
            $table->string('name6',20);
            $table->string('name7',20);
            $table->string('name8',20);
            $table->string('name9',20);
            $table->string('name10',20);
            $table->text('descripcion1');
            $table->text('descripcion2');
            $table->text('descripcion3');
            $table->text('descripcion4');
            $table->text('descripcion5');
            $table->text('descripcion6');
            $table->text('descripcion7');
            $table->text('descripcion8');
            $table->text('descripcion9');
            $table->text('descripcion10');
            $table->rememberToken();
            $table->timestamps();
        });

        Menu::create([
            'title' => 'MENU',
            'name1' => 'Arepas',
            'name2' => 'Desayunos',
            'name3' => 'Cachapas',
            'name4' => 'Hamburguesas',
            'name5' => 'Hot Dogs',
            'name6' => 'Empanadas',
            'name7' => 'Pepitos',
            'name8' => 'Parrillas',
            'name9' => 'Patacones',
            'name10' => 'Bebidas',
            'descripcion1' => 'Es un alimento hecho a base de masa de maíz seco molido o de harina de maíz precocida, de forma circular y aplanada. Es consumido de manera tradicional en las gastronomía de Venezuela.',
            'descripcion2' => 'Es la primera comida que se consume en el día, y su consumo es por la mañana. El nombre deriva del hecho de que uno no come mientras duerme, por lo que al levantarse por la mañana se encuentra en ayunas, rompiéndose ese ayuno al tomar esta comida.',
            'descripcion3' => 'Es una preparación similar a una panqueca que en lugar de harina de trigo incorpora granos de maíz tierno o harina de maíz, e ingredientes como queso campesino o cuajada, panela o azúcar, natilla, huevo, sal, harina de trigo, harina de maíz, leche, mantequilla, entre otros, la cual se cocina en un budare.',
            'descripcion4' => 'Es un alimento en forma de la de bocadillo hecho a base de carne picada aglutinada en forma de filete, cocinado a la parrilla o a la plancha, aunque también puede freírse u hornearse.',
            'descripcion5' => 'Es un alimento en forma de bocadillo que se genera con la combinación de una salchicha del tipo salchicha de Frankfurt o vienesa hervida, o frita, servida en un pan con forma alargada que suele acompañarse con algún aderezo como salsa de tomate y mostaza.',
            'descripcion6' => 'Es una fina masa de pan, masa quebrada u hojaldre rellena con una preparación salada o dulce y cocida al horno o frita. El relleno puede incluir carnes rojas o blancas, pescado, verduras o fruta.',
            'descripcion7' => 'Es un bocadillo caliente originario de España que suele elaborarse con pan francés y carne de ternera (filete) a la plancha o frita en aceite con algo de ajo laminado. Por regla general se trata de un solomillo.',
            'descripcion8' => 'Es un método para cocinar carnes de diferentes animales, principalmente de bovino, mediante el calor del fuego, difundido en casi todo el planeta desde el descubrimiento del manejo del fuego.',
            'descripcion9' => 'Es una comida a base de trozos aplanados fritos de plátano verde, tradicional en la culinaria de varios países de América Latina y el Caribe como Colombia, Cuba, Ecuador, Haití, Honduras, Nicaragua, Costa Rica, Panamá, Puerto Rico, República Dominicana y Venezuela.',
            'descripcion10' => 'Es cualquier líquido que se ingiere y aunque la bebida por excelencia es el agua, el término se refiere por antonomasia a las bebidas alcohólicas y las bebidas gaseosas. Las infusiones también son un ejemplo de uso masivo de bebidas.',  
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
