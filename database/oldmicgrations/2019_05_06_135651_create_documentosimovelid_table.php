<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosimovelidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentosimovelid', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomedocumento');
            $table->string('descricao');
            $table->string('setor');
            $table->string('datacadastro');
            $table->string('idusuariodono');
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
        Schema::dropIfExists('documentosimovelid');
    }
}
