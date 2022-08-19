<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doador', function (Blueprint $table) {
            $table->id();
            $table->string('nome')-> nullable(false);;
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->date('Nascimento')->nullable(false);
            $table->string('cpf')->nullable(false) ->default(0);
            $table->string('telefone')->nullable(false) ->default(0);
            $table->string('cep')->nullable(false) ->default(0);
            $table->string('endereco')->nullable(false) ->default();
            $table->enum('estado', ['AC', 'AL','AP','AM','BA','CE','DF','ES','GO','MA'
                                   ,'MG', 'MS','MT','PA','PB','PE','PI','PR','RJ','RN'
                                   ,'RS','RO','RR','SC','SP','SE','TO'
                                   ]) -> default('SP');
            $table->enum('formapg', ['Debito', 'Credito']) -> default('Debito');
            $table->float('valordoado',11,2)->nullable(false) ->default(0);
            $table->date('ultima_doacao')->nullable(false);
            $table->enum('intervalo', ['UNICO', 'BIMESTRAL'
                                      ,'SEMESTRAL','ANUAL'
                                      ]) -> default('BIMESTRAL');
            //$table->string('estado')->nullable(false) ->default();
            //$table->string('cidade')->nullable(false) ->default();
            //$table->foreign('category_id')->references('id')->on('categories'); // Define o campo como chave extrangeira (foreign key)

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
        Schema::dropIfExists('doador');
    }
}
