<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Contact;

class CreateTableContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',20);
            $table->string('fondo',255)->default('default.png');
            $table->string('email',100);
            $table->string('address',100);
            $table->string('phone',16);
            $table->string('horario1',100);
            $table->string('horario2',100);
            $table->string('horario3',100);
            $table->rememberToken();
            $table->timestamps();
        });

        Contact::create([
            'title' => 'Ubicaciòn',
            'phone' => '+51-786-873-6773',
            'email' => 'Arepa305@gmail.com',
            'address' => '26700 S. Dixie Hwy. 33032 Homestead Fl.',
            'horario1' => '08:00 AM - 10:00 PM',
            'horario2' => '08:00 AM - 11:00 PM',
            'horario3' => '08:00 AM - 6:00 PM',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
