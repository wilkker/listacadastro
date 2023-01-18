<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->



 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <?php session_start();
	include_once('conexao.php');
    ?>
 </head>
 <body>
    <h1>hello</h1>

		<!-- <?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'listacadastro.xls';

		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5">lista de cadastros</tr>';
		$html .= '</tr>';


		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>CPF</b></td>';
		$html .= '<td><b>NOME</b></td>';
		$html .= '<td><b>E-MAIL</b></td>';
		$html .= '<td><b>TELEFONE</b></td>';
		$html .= '</tr>';

		// //Selecionar todos os itens da tabela
		// $result_lista_cadastro = "SELECT * FROM ";
		// $result_lista_cadastro = mysqli_query($conn , $result_lista_cadastro);

		// while($row_msg_contatos = mysqli_fetch_assoc($result_lista_cadastro)){
		// 	$html .= '<tr>';
		// 	$html .= '<td>'.$row_msg_contatos["id"].'</td>';
		// 	$html .= '<td>'.$row_msg_contatos["nome"].'</td>';
		// 	$html .= '<td>'.$row_msg_contatos["email"].'</td>';
		// 	$html .= '<td>'.$row_msg_contatos["assunto"].'</td>';
		// 	$data = date('d/m/Y H:i:s',strtotime($row_msg_contatos["created"]));
		// 	$html .= '<td>'.$data.'</td>';
		// 	$html .= '</tr>';
		// 	;
		// }

		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );

        // Envia o conteúdo do arquivo
		echo $html;
		exit; ?> -->
 </body>
 </html>





