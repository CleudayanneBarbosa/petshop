<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospedagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospedagens', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->dateTime('data_hora_entrada');
            $table->dateTime('data_hora_saida');
            $table->integer('solicitacao_id')->unsigned();
            $table->foreign('solicitacao_id')->references('id')->on('solicitacoes');
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
        Schema::dropIfExists('hospedagens');
    }
}
