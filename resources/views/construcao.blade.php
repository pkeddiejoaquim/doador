<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ url('images/sistema/att-cubo.png') }}" rel="shortcut icon" />
        <link href="{{ url('css/magatt.css') }}" type="text/css" rel="stylesheet" >
        <link href="{{ url('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" >

        <!-- Bootstrap CSS -->
    <title>Doador</title>

    </head>
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

        <div style='padding-top:30px'>
            <a href="javascript:alert('Construindo!!!')">
            <center><img src="{{ url('images/sistema/trabalhando.gif') }}"></center></a>
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
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Título do modal</h4>
                        </div>

                        <!-- Corpo do modal -->
                        <div class="modal-body">
                            <p>Conteúdo no corpo do modal</p>
                            <p>Aqui você pode inserir todo o conteúdo necessário.</p>
                        </div>

                        <!-- Rodapé do modal-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Salvar Alterações</button>
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
</html>
