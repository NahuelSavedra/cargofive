<?php

namespace App\Imports;

use App\Models\Contract;
use App\Models\Rates;
use Maatwebsite\Excel\Concerns\ToModel;

class RatesImport implements ToModel
{
    private $contract;

    public function __construct()
    {
        $this->contract = Contract::latest()->first();
    }


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
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
}
