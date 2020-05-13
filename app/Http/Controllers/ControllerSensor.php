<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Charts;

class Controllersensor extends Controller
{
    @return

    public function_constructor()
    {
        $this->middleware('auth');
    }

    @return
    
    public function index()
    {
        $chart = Charts::database(User::all(), 'line', 'highcharts')
    ->setElementLabel("Total")
    ->setDimensions(1000, 500)
    ->setResponsive(false)
    ->groupByDay();

        return view('home', ['chart' = > $chart]);
    }
}