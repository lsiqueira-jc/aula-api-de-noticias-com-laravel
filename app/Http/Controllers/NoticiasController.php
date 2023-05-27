<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Noticia;

class NoticiasController extends Controller
{
    public function listar()
    {
        $noticias = Noticia::all();

        return response()->json([
            "messege" => "Listagem de noticias",
            "data"  => $noticias
        ]);

    }

    public function Cadastrar(Request $request){
        $img = $request->input('img');
        $link = $request->input('link');
        $subTitulo = $request->input('sub_titulo');
        $titulo = $request->input('titulo');

        $newNoticia = new Noticia();
        $newNoticia->link = $link ;
        $newNoticia->img = $img ;
        $newNoticia->sub_titulo = $subTitulo ;
        $newNoticia->titulo = $titulo ;
        $newNoticia->save();

        return response()->json([
            "messege" => "Noticia cadastrada com sucesso!",
            "data"  => $newNoticia
        ]);


    }
}
