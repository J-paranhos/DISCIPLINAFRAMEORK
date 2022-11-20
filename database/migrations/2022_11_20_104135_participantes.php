<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table)
        {
            $table->increments('id');
             $table->string('nome', 100);
             $table->string('sobrenome', 100);
             $table->date('data_nascimento');
             $table->string('endereco',255)->nullable();
             $table->string('email',100)->unique()->unique();
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
        Schema::dropIfExists('participantes');
    }
};
