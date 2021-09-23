<?php

namespace App\Imports;

use App\Models\Contract;
use App\Models\Rates;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class RatesImport implements ToModel, WithStartRow
{

    private $contract;
    public function __construct()
    {
        //Asigno a la variable contract el ultimo contrato creado para poder relacionar
        $this->contract = Contract::latest()->first();
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //Relaciono las columnas con el archivo a importar
        return new Rates([
            'origin' => $row[0],
            'destination' => $row[1],
            'currency' => $row[4],
            'twenty' => $row[5],
            'forty' => $row[6],
            'fortyhc' => $row[7],
            'contract_id' => $this->contract->id,

        ]);
    }
    //Defino fila de comienzo para evitar importar la primer fila
    public function startRow(): int
    {
        return 2;
    }
}
