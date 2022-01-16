<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{

    public function index(Request $request){

        echo $request->url();
        echo "</br>";
        echo $request->query('teste');
        echo "</br>";
        var_dump($request->query());

        exit();

        $series = [
            'Arcane',
            'Lost',
            'Loky'
        ];

        $html = "<ul>";
        foreach ($series as $serie){
            $html .= "<li>$serie</li>";
        }
        $html .= "</ul>";

        return $html;
    }
}
