<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use produtos;

class ProdutosController extends Controller
{
    
    private $produtos = [
        [
            'nome' => 'Processador Intel I9',
            'categoria' => 'Informática',
            'preco' => 1899.90,
            'novo' => true,
            'promocao' => false
        ],
        [
            'nome' => 'Guitarra Fender Stratocaster',
            'categoria' => 'Instrumentos musicais',
            'preco' => 9899.90,
            'novo' => true,
            'promocao' => false
        ],
        [
            'nome' => 'TV Sony 59"',
            'categoria' => 'Eletrônicos',
            'preco' =>  2499.90,
            'novo' => true,
            'promocao' => true
        ],
        [
            'nome' => 'Soundbar LG XPTO',
            'categoria' => 'Eletrônicos',
            'preco' =>  899.90,
            'novo' => true,
            'promocao' => true
        ],
        [
            'nome' => 'Processador AMD Ryzen 3',
            'categoria' => 'Informática',
            'preco' => 399.90,
            'novo' => false,
            'promocao' => false
        ],
        [
            'nome' => 'iPhone 8 - 64GB',
            'categoria' => 'Celulares',
            'preco' =>  1899.90,
            'novo' => false,
            'promocao' => false
        ],
        [
            'nome' => 'Smartphone Samsung Galaxy S20',
            'categoria' => 'Celulares',
            'preco' =>  1299.90,
            'novo' => false,
            'promocao' => true
        ]
    ];
    
    private function Todos()
    {

       $RetornoLista = [];
       $indice=1;
       foreach($this->produtos as $protudo)
       {
         
         $id = $protudo['id'] = $indice;
         array_push ($protudo,$protudo['id']);     
         $protudo['preco'] = 'R$ ' . number_format($protudo['preco'], 2, ',', '.');

         array_push($RetornoLista, $protudo);
        $indice+=1; 
       }

       return $RetornoLista;
       
    }

    private function Tipo($novo)
    {

       $RetornoLista = [];
       $indice=1;
       foreach($this->produtos as $protudo)
       {
         
         $id = $protudo['id'] = $indice;
         array_push ($protudo,$protudo['id']);     
         $protudo['preco'] = 'R$ ' . number_format($protudo['preco'], 2, ',', '.');

        if ($protudo['novo'] == $novo)
        {

            array_push ($RetornoLista,$protudo);
        }        


        $indice+=1; 
       }

       return $RetornoLista;
       
    }


    public function ListaTodos()
    {

         $produtos = $this->Todos();
         return view('todos',compact('produtos'));
    }



    public function Novos()
    {        

        
        $produtos = $this->Tipo(true);

        return view('novos',compact('produtos'));

    }

    public function Usados()
    {   $produtos = $this->Tipo(false);
        return view('usados',compact('produtos'));
    }

}
