@extends('layouts.layout')

@section('titulo')
    home
@endsection



@section('conteudo')

            <a href="/cadastro/export" class="btn btn-info btn-sm m-1">exportar excel</a>
            <ul class="list-group "  >
                @foreach ($cadastro as $cadastro)
                <li class="list-group-item d-flex justify-content-between align-items-center">

                    <!-- <span class= "align-items-right list-group-item ml-3">CPF:{{$cadastro->cpf}} </span>
                    <span class= "align-items-right list-group-item">Nome:{{$cadastro->nome}}</span>
                    <span class= "align-items-right list-group-item">Email:{{$cadastro->email}} </span>
                    <span class= "align-items-right">Telefone:{{$cadastro->telefone}}</span> -->

                    <label for="nome">CPF: </label>
                    <input type="text"  value="{{$cadastro->cpf}} ">
                    <label for="nome">NOME: </label>
                    <input type="text"  value="{{$cadastro->nome}} ">
                    <label for="nome">EMAIL: </label>
                    <input type="text"  value="{{$cadastro->email}} ">
                    <label for="nome">FONE: </label>
                    <input type="text"  value="{{$cadastro->telefone}} ">

                    <span class="d-flex">
                        <a href="/cadastro/edit/{{$cadastro->id}}" class="btn btn-info btn-sm m-1">Editar</a>
                        <form action="/cadastro/{{$cadastro->id}}" method="post">
                            @csrf
                            @method ('DELETE')
                            <button type="submit" class="btn btn-info btn-sm m-1" >excluir</button>
                        </form>
                    </span>
                </li>
                @endforeach
            </ul>
<!--
                <div class="col-md-10 offset-md-1 dashboard-title-container">
                    <h1>Lista de cadastros</h1>
                </div>
                <div class="col-md-10 offset-md-1 dashboard-lista-container">

                    <table class="table">
                        <head>
                            <tr>
                                <th>CPF</th>
                                <th>NOME</th>
                                <th>EMAIL</th>
                                <th>TELEFONE</th>
                            </tr>
                        </head>
                        <body>
                            @foreach ( $cadastro as $cadastro)
                            <tr>
                                <td> <input type="text" value="{$cadastro -> nome} "> </td>
                            </tr>
                            @endforeach
                        </body>
                    </table>
                </div> -->



@endsection

