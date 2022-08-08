<?php

namespace App\Http\Controllers;

use App\Beer;
use Illuminate\Http\Request;

class PronoController extends Controller
{
    public function Prono()
    {
        $people = Beer::get();
        $total = 0;
        foreach ($people as $beer){
            if ($beer->id != 10){
                $total += $beer->beerAmount;
            }
        }
        $high = Beer::orderby('beerAmount', 'desc')->first();
        $result = compact('people', 'total', 'high');
        return view('Pronostiek', $result);
    }

    public function PronoSubmit(Request $request)
    {
        dd($request);
        $people = Beer::get();
        $result = compact('people');
        return view('Pronostiek', $result);
    }

    public function rules(){
        return view('Regels');
    }
}
