@extends('layouts.layout')

@section('titulo')
    novo cadastro
@endsection



@section('conteudo')
<form action="/cadastro/criar" method="POST" class="row g-3 col-md-6 offset " >
    @Csrf
  <div class="col-12">
    <label for="cpf" class="form-label">CPF</label>
    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="***.***.***-**">
  </div>
  <div class="col-md-12">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o se nome completo" >
  </div>
  <div class="col-12">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Digite Um e-mail valido">
  </div>
  <div class="col-12">
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(**)*****-****">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
@endsection
