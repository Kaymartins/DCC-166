<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function barChart()
    {
        $data = [
            'labels' => ['MG', 'ES', 'RJ', 'SP', 'RO'],
            'data' => [10000, 5000, 15000, 20000, 1000]
        ];
        return view('/chart/chart', compact('data'));
    }
}
