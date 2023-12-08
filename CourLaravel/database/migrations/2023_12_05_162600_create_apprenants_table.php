<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenantsTable extends Migration
{
    public function up()
    {
        Schema::create('apprenants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('apprenants');
    }
}
