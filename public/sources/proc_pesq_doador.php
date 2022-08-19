<?php
/*
				$db = parse_ini_file("/public/sources/cfg.app/doador.ini/",true);
				// lê as informações contidas no arquivo
				$servername 	= $db['doador']['host'];
				$porta  		= $db['doador']['port'];
				$dbname  		= $db['doador']['name'];
				$username  		= $db['doador']['user'];
				$password  		= $db['doador']['pass'];
				$driver		    = $db['doador']['type'];
*/


$servername = "localhost";
$username   = "root";
$password   = "pk2k3@********";
$dbname     = "doador";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Receber a requisão da pesquisa
$requestData= $_REQUEST;
//var_dump($requestData);
//exit;
//Indice da coluna na tabela visualizar resultado => nome da coluna no banco de dados
$columns = array(
	0 => 'id',
	1 => 'nome',
	2 => 'email',
    3 => 'intervalo',
    4 => 'valordoado'
);

//Obtendo registros de número total sem qualquer pesquisa
$result_user = "SELECT id, nome, email, intervalo, valordoado FROM doador";
$resultado_user =mysqli_query($conn, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

//Obter os dados a serem apresentados
$result_usuarios = "SELECT id, nome, email, intervalo, valordoado FROM doador WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
	$result_usuarios.=" AND ( id LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR nome LIKE '".$requestData['search']['value']."%' )";
    $result_usuarios.=" OR email LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.=" OR intervalo LIKE '".$requestData['search']['value']."%' )";
    $result_usuarios.=" OR valordoado LIKE '".$requestData['search']['value']."%' )";
}

$resultado_usuarios=mysqli_query($conn, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);
//Ordenar o resultado
$result_usuarios.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_usuarios=mysqli_query($conn, $result_usuarios);

// Ler e criar o array de dados
$dados = array();
while( $row_usuarios =mysqli_fetch_array($resultado_usuarios) ) {
	$dado = array();
	$dado[] = $row_usuarios["id"];
    $dado[] = $row_usuarios["nome"];
    $dado[] = $row_usuarios["email"];
	$dado[] = $row_usuarios["intervalo"];
    $dado[] = $row_usuarios["valordoado"];

	$dados[] = $dado;
}


//Cria o array de informações a serem retornadas para o Javascript
$json_data = array(
	"draw" => intval( $requestData['draw'] ),//para cada requisição é enviado um número como parâmetro
	"recordsTotal" => intval( $qnt_linhas ),  //Quantidade de registros que há no banco de dados
	"recordsFiltered" => intval( $totalFiltered ), //Total de registros quando houver pesquisa
	"data" => $dados   //Array de dados completo dos dados retornados da tabela
);
//var_dump($json_data);
//exit;
echo json_encode($json_data);  //enviar dados como formato json
