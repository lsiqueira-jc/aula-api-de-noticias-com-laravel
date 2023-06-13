<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Noticias_Destaques;

class Noticias_DestaquesController extends Controller
{
    public function listar()
    {
        
        $noticias_Destaques = Noticias_Destaques::all();

        return response()->json([
            "messege" => "Listagem de noticias em destaques",
            "data"  => $noticias_Destaques
        ]);

    }

    public function Cadastrar(Request $request){
        $img = $request->input('img');
        $link = $request->input('link');
        $subTitulo = $request->input('sub_titulo');
        $titulo = $request->input('titulo');

        $newNoticia_Destaques = new Noticias_Destaques();
        $newNoticia_Destaques->link = $link ;
        $newNoticia_Destaques->img = $img ;
        $newNoticia_Destaques->sub_titulo = $subTitulo ;
        $newNoticia_Destaques->titulo = $titulo ;
        $newNoticia_Destaques->save();

        return response()->json([
            "messege" => "Noticia em destaque cadastrada com sucesso!",
            "data"  => $newNoticia_Destaques
        ]);


    }
}
