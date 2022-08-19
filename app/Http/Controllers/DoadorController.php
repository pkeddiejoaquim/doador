<?php

namespace App\Http\Controllers;

use App\Http\Request\StoredUpdateDoadorFormRequest;
use Illuminate\Http\Request;
use App\Models\Doador;
use DataTables;

class DoadorController extends Controller
{
    private $request;
    private $doador;

    public function __construct(Request $request, Doador $doador )
    {
       $this->middleware('auth');
       $this->doador= $doador;
    }

    public function listadoador(Doador $doador)
    {
        return view('doador.doador');
    }

    public function criar(Doador $doador)
    {
        $title          = "Cadastro Novo Doador";
        $categorias     = [
            'Acessorios'
        ];

        return view('doador/cadastro', compact('title','categorias'));
    }

    public function gravar(Request $request)
    {
        $dadosform  =   $request->only('nome' ,'email','email_verified_at'
                                        ,'cpf','telefone','endereco','nascimento'
                                        ,'estado','formapg','valordoado','ultima_doacao'
                                        ,'intervalo','create_at','update_at'
                                    );

        $insert     =   $this->doador->create($dadosform);
 /*       $doador     =   new Doador;
        $doador->nome               = $request->nome;
        $doador->email              = $request->email;
        $doador->email_verified_at  = $request->email_verified_at;
        $doador->cpf                = $request->cpf;
        $doador->telefone           = $request->telefone;
        $doador->endereco           = $request->endereco;
        $doador->nascimento         = $request->nome;
        $doador->estado             = $request->estado;
        $doador->formapg            = $request->formapg;
        $doador->valordoado         = $request->valordoado;
        $doador->ultima_doacao      = $request->ultima_doacao;
        $doador->intervalo          = $request->intervalo;

        $doador->save();*/
/*
        if ( insert )
        {
            return redirect()->route('/');
        } else {
            return redirect()->route('construcao');
        }*/
        return redirect('doador');
    }

}
