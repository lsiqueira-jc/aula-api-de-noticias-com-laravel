<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Noticias;

class NoticiasController extends Controller
{
    public function listar()
    {
        $noticias = Noticias::all();

        return response()->json([
            "messege" => "Listagem de Noticias",
            "data"    => $noticias
        ],200);

    }

    public function Cadastrar(Request $request){
        $img = $request->input('img');
        $link = $request->input('link');
        $subTitulo = $request->input('sub_titulo');
        $titulo = $request->input('titulo');

        $newNoticia = new Noticias();
        $newNoticia->link = $link ;
        $newNoticia->img = $img ;
        $newNoticia->sub_titulo = $subTitulo ;
        $newNoticia->titulo = $titulo ;
        $newNoticia->save();

    }
}
