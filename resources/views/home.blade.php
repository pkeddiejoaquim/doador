@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Página Exemplo de Exibibição - Teste Doador') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Usuario esta Logado!') }}
                </div>

                <section class="container impapp">
                    <div style='padding-top:25px'>
                        <a href="javascript:history.back()">
                            <button type="button" class="close"
                                    data-dismiss="modal">&times;
                            </button>
                        </a>
                    </div>
                    <!-- Botão que irá abrir o modal -->
                    <div style='padding-top:40px'>
                        <button type="button" class="btn btn-success btn-lg mt-2 ml-2" data-toggle="modal" data-target="#caModal">Abrir Modal</button>
                    </div>

                    <div style='padding-top:0px'>
                        <a href="javascript:alert('Construindo!!!')">
                        <center><img src="{{ url('images/sistema/trabalhando.gif') }}" style="width:90px;"></center></a>
                        <font face="arial" size="5" color="#ccc" >
                            <br><center><tex> Desenvolvimento !</tex></center>
                        </font>

                        <!-- Modal -->
                        <div id="caModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Conteúdo do modal-->
                                <div class="modal-content">

                                    <!-- Cabeçalho do modal -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Título do modal</h4>
                                    </div>

                                    <!-- Corpo do modal -->
                                    <div class="modal-body">
                                        <p>Conteúdo, Exibição</p>
                                        <p>Aqui você pode inserir todo o conteúdo necessário.</p>
                                        <p>Aqui você pode inserir todo o conteúdo necessário.</p>
                                        <p>Aqui você pode inserir todo o conteúdo necessário.</p>
                                    </div>

                                    <!-- Rodapé do modal-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary">Confirma Alterações</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="js/jquery-3.3.1.slim.min.js" ></script>
                    <script src="js/popper.min.js" ></script>
                    <script src="js/bootstrap.min.js" ></script>
                </section>

            </div>
        </div>
    </div>
</div>
@endsection
