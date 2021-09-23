<?php

namespace App\Http\Controllers;

use App\Imports\RatesImport;
use App\Models\Contract;
use App\Models\Rates;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ContractController extends Controller
{
    public function index(){
        return view('contract.index', ['contracts' => Contract::with('rates')->get()]);
    }

    public function create(Request $request){
        return view('contract.import');
    }

    public function store(Request $request){
        //Se crea el contract
        Contract::create([
            'nombre' => $request->input('nombre'),
            'fecha' => $request->input('fecha'),
        ]);

        //Metodo importacion de archivo excel
        Excel::import(new RatesImport(), $request->file('file'));

        return redirect('contract.index')->with('message', 'importacion completa');
    }
}
