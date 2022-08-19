@extends('layouts.app')

@section('content')

    <head>
		<meta charset="utf-8">

		<title>Lista Produtos</title>
        <link href="images/sistema/att-cubo.png" rel="shortcut icon" />
        <link rel="stylesheet" href="{{ asset('css/magatt.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.css') }}" type="text/css">

        <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
	    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script><!-- DataTables Procura tabela iDisplayLength:8 -->
		<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			//alert('JQuery Versão '+jQuery.fn.jquery);
			$('#registros').DataTable({
                "processing"        : true,
				"serverSide"        : true,
                "bPaginate"         : true,
                "bLengthChange"     : false,
                "language"          : {
                        "lengthMenu"    : "Exibir _MENU_ registros por página",
                        "zeroRecords"   : "Nada encontrado - desculpe",
                        "info"          : "Mostrando página",
                        "infoEmpty"     : "Não há registros disponíveis",
                        "infoFiltered"  : "Filtrado o Máximo do Total de Registros"
                },
                "paginate": {
                    "first":      "Primeiro",
                    "last":       "Ultimo",
                    "next":       "Proximo",
                    "previous":   "Anterior"
                },
				"ajax"              : {
                        "url": "sources/proc_pesq_doador.php",
                        "type": "POST"
				},
			});
		} );
		</script>
	</head>

    <div class="modal-body">
        <div style='padding-top:5px'>
            <a href="doador/cadastro">
                <button type="button" class="btn btn-success btn-lg mt-2 ml-2" data-toggle="modal" data-target="#caModal">Cadastrar</button>
            </a>
        </div>

        <table id="registros" cellpadding="0" cellspacing="0" class="table table-striped table-bordered" style="width:95%">
             <thead bgcolor="#DCDCDC">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>e-Mail</th>
                    <th>intervalo Doação</th>
                    <th>Valor</th>
                </tr>
            </thead>
        </table>

    </div>
@endsection
