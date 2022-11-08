@extends('base')
 
@section('title', 'Novos')

 
@section('contuedo')
<div class="row"> <h2> Produtos Usados </h2> </div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col" >Produto</th>
        <th scope="col">Categoria</th>
        <th scope="col">Preço</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
        @if ($produto['promocao'] == true) 
        <tr  class="table-success">
        @else
        <tr>
        @endif    
        <th scope="row"> {{ $produto['id'] }} </th>
        <td>{{ $produto['nome'] }}</td>
        <td>{{ $produto['categoria'] }}</td>
        <td>{{ $produto['preco'] }}</td>

      </tr>

    @endforeach
    </tbody>
  </table>
  
@stop