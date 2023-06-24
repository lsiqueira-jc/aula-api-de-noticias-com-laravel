<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NoticiasDestaques;

class Noticias_DestaquesController extends Controller
{
    public function listar()
    {

        $noticias_Destaques = NoticiasDestaques::all();

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

        //Alertas
        $messege = 'Noticia cadastrada com sucesso!!!';

        $validaNoticia = NoticiasDestaques::where('link', $link_destaque)->first();

        if($validaNoticia) {
            $messege= "O link já existe!!!";
            return view('feedback',compact('messege'));
        }

        //Usando o Model para salvar no banco
        $newNoticia_Destaques = new NoticiasDestaques();
        $newNoticia_Destaques->link = $link_destaque ;
        $newNoticia_Destaques->imagem = $imagem_destaque ;
        $newNoticia_Destaques->titulo = $titulo_destaque ;
        $newNoticia_Destaques->save();

        return view('feedback', compact('messege'));

    }

    public function novo(){
        return view('cadastrar');
    }


    
    public function deletar($id){
        $noticia = NoticiasDestaques::find($id);

        if(!$noticia){
            return response()->json([
                "message" => "Aluno não encontrado"
            ],404);
        }


        $noticia->delete();

        return response()->json([
            "message" => "notícia removido"

        ]);
    }


}
