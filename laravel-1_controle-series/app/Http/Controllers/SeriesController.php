<?php

namespace App\Http\Controllers;

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

        $series = [
            'Arcane',
            'Mr. root',
            'Loky'
        ];

//        return view('series.index', [
//            'series' => $series
//        ]);

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }
}
