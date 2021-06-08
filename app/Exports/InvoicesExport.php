<?php

namespace App\Exports;

// use App\Invoice;
use App\Models\Invoice;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Facades\Excel;

class InvoicesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Invoice::all();
    }

    
}
