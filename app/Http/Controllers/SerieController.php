<?php

namespace controle_series\Http\Controllers;

use controle_series\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{

    public function index(Request $request)
    {
        $series = Serie::all();

        $mensagem = $request->session()->get('mensagem');

        return view('index', compact('mensagem', 'series'));
    }

    public function store (Request $request)
    {

        Serie::create([
            'nome' => $request->nome
        ]);

        $request->session()->flash('mensagem', "Serie adicionada com sucesso");  //flash

        return redirect()->route('index');
    }
}
