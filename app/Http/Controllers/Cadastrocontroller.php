<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {

        $cadastro = Cadastro::all();



        return view ('welcome' , ['cadastro' => $cadastro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('novocadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cadastro = new Cadastro;

        $cadastro -> cpf = $request->cpf;
        $cadastro -> nome = $request->nome;
        $cadastro -> email = $request->email;
        $cadastro -> telefone = $request->telefone;

        $cadastro->save();

        return redirect('/') ->with('msg', 'Cadastro criado com sucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit ($id)
    {
        $cadastro = Cadastro::findOrFail($id);

        return view('cadastroedit' , ['cadastro' => $cadastro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Cadastro::findOrFail($request->id)->update($request->all());

        return redirect('/') ->with('msg', 'Cadastro editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cadastro::findOrFail($id)->delete();
        return redirect('/') ->with ('msg', 'Cadastro excluido com sucesso');
    }

    public function exportexcel ()
    {

         require 'C:\xampp\htdocs\salvo crud cadastro 2\crud-cadastr2\resources\views\conexao.php';


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

		// Selecionar todos os itens da tabela
		 $result_lista_cadastro = "SELECT * FROM cadastros";
		 $resultado_lista_cadastro = mysqli_query($conn , $result_lista_cadastro);

		 while($row_lista_cadastro = mysqli_fetch_assoc($resultado_lista_cadastro)){
		 	$html .= '<tr>';
		 	$html .= '<td>'.$row_lista_cadastro["id"].'</td>';
		 	$html .= '<td>'.$row_lista_cadastro["cpf"].'</td>';
		 	$html .= '<td>'.$row_lista_cadastro["nome"].'</td>';
		 	$html .= '<td>'.$row_lista_cadastro["email"].'</td>';
		 	$html .= '<td>'.$row_lista_cadastro["telefone"].'</td>';
		 	$html .= '</tr>';
		 	;
		 }

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
		exit;

        return redirect('/') ->with ('msg', 'arquivo exportado');

    }
}
