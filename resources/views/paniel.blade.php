@extends('base')


@section('contuedo')

<div class="h4 d-flex justify-content-between">

<h2> Listagem de participantes </h2>     <a href = "{{ route('participante') }}">  <button type="button" class="btn btn-success">Cadastro + </button> </a>
</div>
<div class="text-danger border-bottom border-sucess"> </div>
<div class="row">


    @if(session('status'))
    <div class="alert alert-success" role="alert">
        {{session('status')}}
  </div>
@endif

</div>
<div class="row">





    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">Nascimento</th>
            <th scope="col">Endereço</th>
            <th scope="col">Email</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($Participantes as $Participante)
          <tr>
            <td>{{ $Participante['id'] }}</td>
            <td>{{ $Participante['nome'] }}</td>
            <td>{{ $Participante['sobrenome'] }}</td>
            <td> {{ date( 'd/m/Y' , strtotime($Participante->data_nascimento))}}</td>
            <td>{{ $Participante['endereco'] }}</td>
            <td>{{ $Participante['email'] }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>




</div>


@stop
