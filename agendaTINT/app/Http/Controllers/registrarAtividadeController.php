<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelAgenda;

class registrarAtividadeController extends Controller
{
    public function index(){
        $dados = modelAgenda::all();//Todos os dados da tabela
        return view('paginas.cadastrar')->With('dados',$dados);
    }//fim do método - retornar dados

    public function store(Request $request){
        $data = $request->input('dataEvento');
        $descricao = $request->input('descricaoTexto');
        //Inserindo os dados na tabela
        $model = new modelAgenda();
        $model->dataEvento = $data;
        $model->descricao  = $descricao;

        $model->save();//Armazenar no BD
        return redirect('/cadastrar');
    }//fim do método de cadastro
}//Todas as operações do banco de dados
