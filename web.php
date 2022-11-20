<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/imc/{nome}/{peso}/{altura}/{genero}', function ($nome,$peso,$altura,$genero) {

if (!is_string($nome))
return "Olá. por favor, mande um nome valido!";
else if (!is_numeric($peso))
return "Olá. por favor, mande um peso valido!";
else if (!is_numeric($altura))
return "Olá. por favor, mande uma altura válida!";
else if ( strtolower($genero) <> "masculino" and strtolower($genero) <> "feminino" )
return "Olá. por favor, mande um genero válido!";
else
{
$altura =  $altura / 100;
$imc =  round ($peso / pow($altura,2), 1) ;   

if ($imc >= 18.5 )
$classicacaoImc = "Peso Baixo";

if ($imc >= 18.6  && $imc <= 24.9) 
$classicacaoImc = "Peso Normal";

if ($imc >= 25.0  && $imc <= 29.9) 
$classicacaoImc = "Levemente acima do peso";

if ($imc >= 35.0  && $imc <= 39.9) 
$classicacaoImc = "Obesidade gray II";

if ($imc >= 40 ) 
$classicacaoImc = "Obesidade gray III";


if (strtolower($genero) == "feminino" )
$pronome = "Sra.";
else
$pronome = "Sr.";

return "Olá $pronome " .  ucfirst(strtolower($nome))  ." seu imc é : $imc. Sua classificação é $classicacaoImc ";
}

});
//->where(['nome' => '[a-z]+', 'peso' => '[0-9]+', 'altura' => '[0-9]+', 'genero' => '[a-z]+']);