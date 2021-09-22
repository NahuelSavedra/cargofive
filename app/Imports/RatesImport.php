<?php

namespace App\Imports;

use App\Models\Rates;
use Maatwebsite\Excel\Concerns\ToModel;

class RatesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Rates([
            //
        ]);
    }
}
