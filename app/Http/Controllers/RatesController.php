<?php

namespace App\Http\Controllers;

use App\Imports\RatesImport;
use App\Models\Contract;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RatesController extends Controller
{
    public function create(Request $request){
//        $contracts = Contract::latest()->first();
//        dd($contracts->id);
        return view('rates.import');
    }
    public function store(Request $request){

        Contract::create([
            'nombre' => $request->input('nombre'),
            'fecha' => $request->input('fecha'),
        ]);
        $file = $request->file('file');
        Excel::import(new RatesImport(), $file);

        return back()->with('message', 'importacion completa');

    }
    //Metodo importacion de excel

}
