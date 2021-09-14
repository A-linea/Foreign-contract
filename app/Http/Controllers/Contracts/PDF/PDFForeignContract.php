<?php

namespace App\Http\Controllers\Contracts\PDF;

use App\Http\Controllers\Contracts\Factories\PDFContractFactory;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Response;

class PDFForeignContract implements PDFContractFactory
{
    public function createContractPDF($data): Response
    {

        return PDF::loadView('contracts.PDF.foreign_contract',  $data)->download('contract.pdf');
    }


    public function showContractPDF(array $data)
    {
       return   PDF::loadView('contracts.PDF.foreign_contract', $data)->stream();
    }
}
