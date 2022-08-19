<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\Doador;

class DoadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doador::create([
             'nome'              =>'Edmilson Joaquim'
            , 'email'            =>'admin@doador.com.br'
            , 'email_verified_at'=>'2022-08-18 00:00:00'
            , 'Nascimento'       =>'2000-01-01 '
            , 'cpf'              =>'065.884.039-84'
            , 'telefone'         =>'11 985011431'
            , 'endereco'         =>'rua testando,1'
            , 'estado'           =>'SP'
            , 'formapg'          =>'Debito'
            , 'valordoado'       =>'100.00'
            , 'ultima_doacao'    =>'2022-01-01 23:50:59'
            , 'intervalo'        =>'UNICO'
            , 'created_at'       =>'2010-12-01 12:00:00'
            , 'updated_at'       =>'2022-08-18 17:59:50'
        ]);

        Doador::create([
            'nome'              =>'Joaquim Edmilson '
           , 'email'            =>'admin@doador.com'
           , 'email_verified_at'=>'2022-08-18 00:00:00'
           , 'Nascimento'       =>'2000-01-02 '
           , 'cpf'              =>'067.886.041-86'
           , 'telefone'         =>'11 985011431'
           , 'endereco'         =>'rua testando,2'
           , 'estado'           =>'RJ'
           , 'formapg'          =>'Credito'
           , 'valordoado'       =>'200.00'
           , 'ultima_doacao'    =>'2022-01-01 11:50:59'
           , 'intervalo'        =>'BIMESTRAL'
           , 'created_at'       =>'2010-12-01 10:00:00'
           , 'updated_at'       =>'2022-08-18 15:39:20'
       ]);


    }
}
