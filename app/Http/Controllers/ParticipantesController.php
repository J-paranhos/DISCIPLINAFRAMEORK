<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participantes;
use Illuminate\Support\Facades\Redirect;
use App\Htpp\Requests;
use App\Http\Requests\StoreParticipante;

class ParticipantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Participantes = Participantes::all();
        return view('paniel')->with('Participantes', $Participantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('participantes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @param  \App\Http\Requests\StorePostRequest  $request
    * @return Illuminate\Http\Response
     */
    public function store(StoreParticipante $request)
    {



        $Participante = new Participantes();
        $Participante->nome  = $request->nome;
        $Participante->sobrenome  = $request->sobrenome;
        $Participante->data_nascimento = $request->nascimento;
        $Participante->endereco = $request->endereco;
        $Participante->email = $request->email;

        if ($EmailExiste = Participantes::where('email',$request->email)->get())
        {
        $request->session()->flash('status', 'Email já cadastrado');
        return Redirect::route('participante');
        }
        else
        $Participante->save();

        
        $request->session()->flash('status', 'Participante cadastrado com sucesso!');
        return Redirect::route('paniel');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }








}
