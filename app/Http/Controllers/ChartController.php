<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function escolasPorRegiao()
    {
        $file = fopen(__DIR__ . "/../../../csv/totalEscolasRegiao.csv", "r");
        $header = true;
        $data = [];
        $data['graphName'] = 'Escolas Por Região';
        while(($line = fgetcsv($file)) !== false) {
            if($header) {
                $data['labels'] = $line;
                $header = false;
                continue;
            }
            $data['data'] = $line;
        }

        return view('/chart/chart', compact('data'));
    }
}
