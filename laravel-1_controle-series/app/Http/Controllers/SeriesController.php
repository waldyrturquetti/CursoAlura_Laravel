<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{

//    public function index(Request $request){
//
//        echo $request->url();
//        echo "</br>";
//        echo $request->query('teste');
//        echo "</br>";
//        var_dump($request->query());
//
//
//        $series = [
//            'Arcane',
//            'Lost',
//            'Loky'
//        ];
//
//        $html = "<ul>";
//        foreach ($series as $serie){
//            $html .= "<li>$serie</li>";
//        }
//        $html .= "</ul>";
//
//        return $html;
//    }

    public function index(Request $request){

//        $series = [
//            'Arcane',
//            'Mr. Robot',
//            'Loky'
//        ];

//        $series = Serie::all();

        $series = Serie::query()->orderBy('nome')->get();

//        return view('series.index', [
//            'series' => $series
//        ]);

        $mensagem = $request->session()->get('mensagem');
//        $request->session()->remove('mensagem');

//        return view('series.index', compact('series'));

        return view('series.index', compact('series', 'mensagem'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nome = $request->nome;
//        var_dump($nome);

//        $serie = new Serie();
//        $serie->nome = $nome;
//        var_dump($serie->save());

//        var_dump(Serie::create([
//            'nome' => $nome
//        ]));

//        $serie = Serie::create([
//            'nome' => $nome
//        ]);

        $serie = Serie::create($request->all());

//        echo "Série com id ($serie->id) criada: $serie->nome";

        $request->session()
//            ->put('mensagem', "Série ($serie->id) criada com sucesso $serie->nome" );
            ->flash('mensagem', "Série ($serie->id) criada com sucesso $serie->nome" ); //Flash message

//        return redirect('/series');
        return redirect()->route('listar_series');
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->id);
        $request->session()
            ->flash('mensagem', "Série removida com sucesso" );

//        return redirect('/series');
        return redirect()->route('listar_series');
    }

}
