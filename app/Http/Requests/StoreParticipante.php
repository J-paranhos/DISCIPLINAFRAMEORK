<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParticipante extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'max:100|required|min:3',
            'sobrenome' => 'max:100|required|min:3',
            'nascimento' => 'required|date',
            'email' => 'max:100|required|email',
        ];
    }



    public function messages()
        {
            return [

                'nome.required' => 'O campo nome precisar ser preenchido',
                'nome.max' => 'O campo nome ultrapassou o limite de 100 caracters',
                'nome.min' => 'O campo nome precisar ter um minino de 3 caracters',

                'sobrenome.required' => 'O campo sobrenome precisar ser preenchido',
                'sobrenome.max' => 'O campo sobrenome ultrapassou o limite de 100 caracters',
                'sobrenome.min' => 'O campo sobrenome precisar ter um minino de 3 caracters',

                'nascimento.required' => 'O campo data precisar ser preenchido',
                'nascimento.date' => 'O campo data está incorreto',


                'email.max' => 'O campo email ultapssou o limite de 100 caracters',
                'email.required' => 'O campo endereço precisar ser preenchido',
                'email.email' => 'O campo email está incorreto',
            ];
        }




}
