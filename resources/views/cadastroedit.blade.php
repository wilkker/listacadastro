@extends('layouts.layout')

@section('titulo')
    editando cadastro de {{$cadastro->nome}}
@endsection



@section('conteudo')
<form action="/cadastro/update/{{$cadastro->id}}" method="post" class="row g-3 col-md-6 offset " >
    @Csrf
    @method ('put')
  <div class="col-12">
    <label for="cpf" class="form-label">CPF</label>
    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="***.***.***-**" value="{{$cadastro->cpf}}">
  </div>
  <div class="col-md-12">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o se nome completo"  value="{{$cadastro->nome}}">
  </div>
  <div class="col-12">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Digite Um e-mail valido" value="{{$cadastro->email}}">
  </div>
  <div class="col-12">
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(**)*****-****" value="{{$cadastro->telefone}}">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Atualizar</button>
  </div>
</form>
@endsection
