<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NoticiasDestaques;

class Noticias_DestaquesController extends Controller
{
    public function listar()
    {
<<<<<<< HEAD
        
        $noticias_Destaques = NoticiasDestaques::all();
=======

        $noticias_Destaques = Noticias_Destaques::all();
>>>>>>> 7008b6ca983a6f6d2f3ed21dede86b2fd8616163

        return response()->json([
            "messege" => "Listagem de noticias em destaques",
            "data"  => $noticias_Destaques
        ]);

    }

    public function Cadastrar(Request $request){
        //recebendo os dados
        $imagem_destaque  = $request->input('imagem');
        $link_destaque    = $request->input('link');
        $titulo_destaque  = $request->input('titulo');

        //debugando os dados
        // dd($imagem_destaque);

        //Usando o Model para salvar no banco
        $newNoticia_Destaques = new NoticiasDestaques();
        $newNoticia_Destaques->link = $link_destaque ;
        $newNoticia_Destaques->imagem = $imagem_destaque ;
        $newNoticia_Destaques->titulo = $titulo_destaque ;
        $newNoticia_Destaques->save();

        return response()->json([
            "messege" => "Noticia em destaque cadastrada com sucesso!",
            "data"  => $newNoticia_Destaques
        ]);


    }

    public function novo(){
        return view('cadastrar');
    }
}
