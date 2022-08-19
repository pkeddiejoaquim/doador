@extends('layouts.app')

@section('content')
<!-- Modal -->
<div id="caModal" class="modal" style="background-color: rgba(0, 0, 0, 0.3); opacity: 0.9;">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card" style="z-index:1060; top:60px;">
                        <div class="card-header" style='min-height: 30px !important; background-image: linear-gradient(to top, #0075be, #005a9c); color: rgb(255, 255, 255);'>
                            <img width='20px;' src="{{ url('images/sistema/att-cubo-branco.png') }}" id="ca"/>
                            {{ __('Cadastro de Doador') }}
                            <a href="javascript:history.back()"><button  type="button" class="close"
                               data-dismiss="modal">&times;</button>
                            </a>
                        </div>

                        <div class="card-body" style="padding-top:20px;">

                            <form method="POST" action="cadastro/inserir">
                            @csrf
                            <div style="width:60%">
                                <div class="form-group col-md-12">
                                    <label for="nome" class="col-md-3">{{ __('Nome') }}</label>
                                    <input type="text" id="nome" name="nome"
                                     placeholder="Nome" class="col-md-8" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="email" class="col-md-3">{{ __('email') }}</label>
                                    <input type="text" id="email" name="email"
                                     placeholder="email" class="col-md-8">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="cpf" class="col-md-3">{{ __('CPF') }}</label>
                                    <input type="text" id="cpf" name="cpf"
                                     placeholder="cpf" class="col-md-8">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="telefone" class="col-md-3">{{ __('Telefone') }}</label>
                                    <input type="text" id="telefone" name="telefone"
                                     placeholder="telefone" class="col-md-8">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="datanasc" class="col-md-3">{{ __('Data Nascimento') }}</label>
                                    <input type="text" id="datanasc" name="datanasc"
                                     placeholder="Data de Nascimento" class="col-md-8">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="intervalo" class="col-md-3">{{ __('I.D.') }}</label>
                                    <input type="text" id="intervalo" name="intervalo"
                                     placeholder="Intervalo Doação" class="col-md-8">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="fp" class="col-md-3">{{ __('Forma Pagamento') }}</label>
                                    <input type="text" id="fp" name="fp"
                                     placeholder="forma de pagamento" class="col-md-8">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="nc" class="col-md-3">{{ __('Numero do Cartao') }}</label>
                                    <input type="text" id="nc" name="nc"
                                     placeholder="forma de pagamento" class="col-md-8">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="model" class="col-md-3">{{ __('endereço') }}</label>
                                    <input type="text" id="model" name="model"
                                     placeholder="codigo" class="col-md-8">
                                </div>


                            </div>

                            <button  type="submit" class="btn btn-primary"data-dismiss="modal">
                                enviar
                            </button>
                            </form>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection

<script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    jQuery(document).ready(function() {
       jQuery('#caModal').css('display','block');

    });
</script>
<script>
    new Vue({
    el:'#app',
    template: `

    `
    })
</script>
