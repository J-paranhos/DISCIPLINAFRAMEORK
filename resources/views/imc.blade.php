<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>calculadora imc</title>
  </head>
  <body>


    @isset($classicacaoImc)

    @switch($classicacaoImc)
    @case(1)
    <div class="alert alert-danger" role="alert">
    <p>Ola {{$pronome}}  {{$nome}} o cálculo do imc foi de: {{$imc}}, sua classificação do imc é: Peso Baixo </p>
    </div>
    @break
 
    @case(2)
    <div class="alert alert-success" role="alert">
    <p>Ola {{$pronome}}  {{$nome}} o cálculo do imc foi de: {{$imc}}, sua classificação do imc é: Peso normal </p>
    </div>
    @break

    @case(3)
    <div class="alert alert-warning" role="alert">
    <p>Ola {{$pronome}}  {{$nome}} o cálculo do imc foi de: {{$imc}},  sua classificação do imc é: Levemente acima do peso </p>
    </div>
    @break

    @case(4)
    <div class="alert alert-danger" role="alert">
    <p>Ola {{$pronome}}  {{$nome}} o cálculo do imc foi de: {{$imc}}, sua classificação do imc é: Obesidade gray II </p>
    </div>
    @break
    
    @case(5)
    <div class="alert alert-danger" role="alert">
    <p>Ola {{$pronome}} {{$nome}} o cálculo do imc foi de: {{$imc}}, sua classificação do imc é: Obesidade gray III </p>
    </div>
    @break
    @endswitch

    @endisset
    
    @empty($classicacaoImc)
        <div class="alert alert-danger" role="alert">
        <p>{{ $erro }} </p>
        </div>
    @endempty

  
    


  </body>
</html>