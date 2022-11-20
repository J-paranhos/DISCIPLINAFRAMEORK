@extends('base')

@section('title', 'Cadastro')


@section('contuedo')


@if($errors->all())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
@endif


<div class="h4 d-flex justify-content-between">

    <h2> Cadastro de Participantes</h2>     <a href = "{{ route('paniel') }}">  <button type="button" class="btn btn-success">Listar + </button> </a>
    </div>

@if(session('status'))
    <div class="alert alert-danger" role="alert">
        {{session('status')}}
  </div>
@endif


<div class="row d-flex justify-content-center">
<div class="col-5 ">
<form class="row g-3 needs-validation" method="post"  action = "{{route('participante')}}"  novalidate>
@csrf

    <div class="mb-1">
      <label for="Idnome" class="form-label">Priemiro nome</label>
      <input type="text" class="form-control" id="Idnome"   name = "nome" required>

    </div>

    <div class="mb-1">
      <label for="Idsobenome" class="form-label">Sobrenome</label>
      <input type="text" class="form-control" id="Idsobenome" name = "sobrenome" required >
    </div>

    <div class="mb-1">
        <label for="IdEmail" class="form-label">Email</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input type="email" class="form-control" id="IdEmail" aria-describedby="inputGroupPrepend"  name = "email" required >

    </div>

    <div class="mb-1">
      <label for="Idenedereco" class="form-label">Endereço</label>
      <input type="text" class="form-control" id="Idenedereco"  required>

    </div>

    <div class="mb-1">
      <label for="Idname" class="form-label">Data Nascimento</label>
      <input type="date" class="form-control" id="Idname" name = "nascimento" required >

    </div>
    <div class="mb-1">
      <button class="btn btn-primary" type="submit"> Enviar </button>
    </div>
  </form>
</div>
</div>
@stop

