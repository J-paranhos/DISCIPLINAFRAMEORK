<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    
public function CalcularImc($nome, $peso, $altura, $genero)
{
    #$letras = "[[:alpha:]]";
    if (!is_string($nome) )
    return view('imc', ['erro' => "Campo nome está invalido."] );
    else if (!is_numeric($peso) )
    return view('imc', ['erro' => "Campo peso está invalido."]);
    else if (!is_numeric($altura) )
    return view('imc', ['erro' => "Campo altura está invalido."] );
    else if ( (strtolower($genero) <> "masculino" and strtolower($genero) <> "feminino"))
    return view('imc',['erro' => "Campo genero está invalido."]) ;
    else
    {
    $altura =  $altura / 100;
    $imc =  round ($peso / pow($altura,2), 1) ;   
    
    if ($imc <= 18.5 )
    $classicacaoImc = 1; //"Peso Baixo";
    
    if ($imc >= 18.6  && $imc <= 24.9) 
    $classicacaoImc = 2; //"Peso Normal";
    
    if ($imc >= 25.0  && $imc <= 29.9) 
    $classicacaoImc = 3;  //"Levemente acima do peso";
    
    if ($imc >= 35.0  && $imc <= 39.9) 
    $classicacaoImc = 4; //"Obesidade gray II";
    
    if ($imc >=   40 ) 
    $classicacaoImc = 5; //"Obesidade gray III";
    
    
    if (strtolower($genero) == "feminino" )
    $pronome = "Sra.";
    else
    $pronome = "Sr.";
    
    return view('imc', compact('pronome', 'nome','imc','classicacaoImc'));
}
}



}
