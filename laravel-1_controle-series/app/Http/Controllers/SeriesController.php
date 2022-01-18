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

        $series = Serie::all();

//        return view('series.index', [
//            'series' => $series
//        ]);

        return view('series.index', compact('series'));
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

        echo "Série com id ($serie->id) criada: $serie->nome";
    }

}
