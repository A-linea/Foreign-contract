<?php

namespace App\Http\Controllers\Contracts\PDF;

use App\Http\Controllers\Contracts\Factories\PDFContractFactory;
use Barryvdh\DomPDF\PDF;

class PDFForeignContract implements PDFContractFactory
{
    public function createContractPDF($data) :void
    {
        $pdf = PDF::loadView('contracts.PDF.foreign_contract')->stream('contract.pdf');
    }

}
